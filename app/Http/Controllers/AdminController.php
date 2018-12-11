<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use App\Classified;


class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('admin.users',compact('users'));
    }

    public function mail($id)
    {
        $user = User::find($id);

        return view('admin.mail',compact('user'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function userReports()
    {
        //get labels for the previous 8 months
        $upmLabels = array();
        for ($i=0; $i < 8; $i++) { 
            array_unshift($upmLabels, (Carbon::now()->addMonth($i*-1)->format('F Y')));
        }
        $upmLabels = json_encode($upmLabels);

        //get counts of how many users registered each month over the last 8 months
        $upmData = array();
        for ($i=0; $i < 8; $i++) { 
            array_unshift($upmData, User::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', date('m')-$i)->get()->count());
        }
        $upmData = json_encode($upmData);

        $epData = DB::table('attendees')
            ->join('events', 'attendees.event_id', '=', 'events.event_id')
            ->select(
                'events.event_name AS event_name',
                DB::raw("count(attendees.event_id) AS amount_attending"))
            ->groupBy('attendees.event_id')
            ->get();

        $epData = json_encode($epData);

        $bbmData = json_encode(DB::select(DB::raw('SELECT manufacturer, COUNT(*)
                                        FROM boats
                                        GROUP BY manufacturer
                                        ORDER BY COUNT(*) DESC')));

        return view('admin.report', compact('upmData', 'upmLabels', 'bbmData', 'epData'));
    }

    public function renew($id)
    {
            
        $membership = Membership::create([
        'member_id' => $id,
        'expiration_date' => $end,
        'paid' => 1,
        ]);
    }

    public function totalRevenue()
    {
        $sold = Classified::where('sold','=','1')->get();

        $revenue = 0;

        foreach ($sold as $soldItem) {


        $revenue += $soldItem->cost;
        }

        return $revenue;
    }


}
