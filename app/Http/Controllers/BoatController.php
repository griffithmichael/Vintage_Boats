<?php

namespace App\Http\Controllers;

use App\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boats = Boat::all();
        return view('boats.index',compact('boats'));
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

/*        if($request()->has('currently_own'))
        {
            $currently_own = 1;
        }
        else
        {
            $currently_own = 0;
        }*/

        if (is_null(($request['currently_own'])))
        {
            $currently_own = 0;
        }
        else
        {
            $currently_own = 1;
        }

        $boat = new Boat;
        $boat->VIN = $request['VIN'];
        $boat->owned_by = auth()->user()->id;
        $boat->model = $request['model'];
        $boat->manufacturer = $request['manufacturer'];
        $boat->year = $request['year'];
        $boat->year_purchased = $request['year_purchased'];
        $boat->currently_own = $currently_own;
        $boat->save();


        return back();





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function show(Boat $boat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function edit(Boat $boat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boat $boat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        //
    }
}
