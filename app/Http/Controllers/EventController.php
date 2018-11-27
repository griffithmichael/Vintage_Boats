<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Calendar;
use Auth;
use Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->event_name,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'url' => 'events/' . $value->event_id,
                    ]
                );
            }
        }



        $calendar = Calendar::addEvents($events);
        return view('events.index', compact('calendar'));
    }

    public function attend($id)
    {
        \DB::table('attendees')->insert([
            'event_id'  => $id,
            'user_id'   => auth()->user()->id
            ]);
        return back();
    }

    public function unattend($id)
    {
        \DB::table('attendees')->where('event_id',$id)
        ->where('user_id',auth()->user()->id)
        ->delete();

        return back();

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(),[

            'event_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        if($validator->fails())
        {
            \Session::flash('warning', 'Event details mandatory');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }

        $event = new Event;
        $event->event_name = $request['event_name'];
        $event->location = $request['location'];
        $event->description = $request['description'];
        $event->start_date = $request['start_date'];
        $event->end_date= $request['end_date'];
        $event->hosted_by = auth()->user()->id;
        $event->save();

        \Session::flash('success', 'Event added!');
        return Redirect::to('/events');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $event = Event::find($id);

       // $count = \DB::table('attendees')->count();

      $count =  \DB::table('attendees')->where('event_id',$id)
        ->where('user_id',auth()->user()->id)->count();


        return view('events.show',compact('event','count'));

      //  return $event;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
