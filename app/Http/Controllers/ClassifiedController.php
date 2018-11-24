<?php

namespace App\Http\Controllers;

use App\Classified;
use Illuminate\Http\Request;

class ClassifiedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::all();
        
        return view('classifieds.index', ['classifieds' => $classifieds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classifieds.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function show(Classified $classified)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function edit(Classified $classified)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classified $classified)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classified $classified)
    {
        //
    }
}
