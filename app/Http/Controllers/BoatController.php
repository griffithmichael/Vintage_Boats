<?php

namespace App\Http\Controllers;

use App\Boat;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $galleries = Gallery::where('gallery_by',auth()->user()->id)->get();



        $your_gallery = $galleries->pluck('title','gallery_id');

        $boat_galleries = DB::table('boat_pictures')
                                    ->join('galleries','boat_pictures.gallery_id', '=', 'galleries.gallery_id')
                                    ->join('boats','boat_pictures.VIN','=','boats.VIN')
                                    ->select('galleries.*','boat_pictures.*','boats.*')
                                    ->get();

                                    // return $boat_galleries;


     return view('boats.index',compact('boats','your_gallery','boat_galleries'));
    }

    public function mycollection()
    {
        $boats = DB::table('boats')->where('owned_by', auth()->user()->id)->get();

        $galleries = Gallery::where('gallery_by',auth()->user()->id)->get();



        $your_gallery = $galleries->pluck('title','gallery_id');

        $boat_galleries = DB::table('boat_pictures')
                                    ->join('galleries','boat_pictures.gallery_id', '=', 'galleries.gallery_id')
                                    ->join('boats','boat_pictures.VIN','=','boats.VIN')
                                    ->select('galleries.*','boat_pictures.*','boats.*')
                                    ->get();




        return view('boats.index',compact('boats','your_gallery','boat_galleries'));
    }



    
    public function countBoat()
    {


        // $boats = Boat::select('manufacturer')
        //                     ->orderBy('manufacturer')->Count('manufacturer')->count();

        // return $boats;

        $boats = DB::select(DB::raw('SELECT manufacturer, COUNT(*)
                                        FROM boats
                                        GROUP BY manufacturer
                                        ORDER BY COUNT(*) DESC'));

        return $boats;



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

    public function addgallery(Request $request)
    {

        \DB::table('boat_pictures')->insert([
            'VIN' => $request['VIN'],
            'gallery_id' =>  $request['gallery_id']
            ]);
        return back();

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
