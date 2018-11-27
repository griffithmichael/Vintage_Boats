<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use User;
use Auth;
use \App\Membership;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $membership = Membership::find($user->id);
        $now = Carbon::now();

        $end_date = Carbon::parse($membership->expiration_date);

        $length = $end_date->diffInDays($now);

        return view('home',compact('user','membership','end','length'));
    }

    public function about()
    {
        return view('about');
    }
}
