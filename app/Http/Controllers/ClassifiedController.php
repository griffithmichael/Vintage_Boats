<?php

namespace App\Http\Controllers;

use App\Classified;
use Illuminate\Http\Request;

use App\User;
use File;

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
        //$user_id =  \Auth::id();

       $classifieds = new Classified;
        $classifieds->title = $request['title'];
        $classifieds->cost = $request['cost'];
        $classifieds->description = $request['description'];
        $classifieds->images = 0;
        $classifieds->posted_by = auth()->user()->id;
        $classifieds->save();

       $dir = public_path().'/database/classified/';

       $gallery_count = (count(scandir($dir)) -2);

       $new_gallery_count = ($gallery_count + 1);

       $new_gallery = File::makeDirectory(public_path().'/database/classified/'.$classifieds->classified_id, 0775,true);

      $new_gallery_dir = public_path().'/database/classified/'.$classifieds->classified_id;

       $new_picture_amnt = (count(scandir($new_gallery_dir)) -2);

    //   $title = $request->input('title');



        if ($request->hasFile('images'))
        {
            foreach ($request->images as $image) {

                $new_picture_amnt = ($new_picture_amnt + 1);

                $extention = $image->getClientOriginalExtension();
                

                $image->move($new_gallery_dir, ($new_picture_amnt .'.'. $extention));
            }
        }



        $classifieds->images = $new_picture_amnt;

       $classifieds->save();




        return redirect('/classifieds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classified  $classified
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classified = Classified::where('classified_id', $id)->first();
        
        return view('classifieds.show',compact('classified'));
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
    public function destroy($id)
    {
        //
       $classified = Classified::find($id);

       $classified->delete();

       return redirect('/classifieds');


    }
}
