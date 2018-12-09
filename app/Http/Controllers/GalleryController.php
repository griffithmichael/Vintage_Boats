<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\User;
//use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Gallery $galleries)
    {
        $galleries = $galleries->all();
        $thumbnails = array();

        foreach ($galleries as $gallery) {

            $thumbnails[] = scandir(public_path().'/database/galleries/' . $gallery->gallery_id)[2];            
        }

        return view('galleries.index',compact('galleries'));
    }

    public function upload()
    {
        return view('galleries/upload');
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
        
       $user_id =  \Auth::id();

/*            $galleries = Gallery::create([
            'gallery_id' => $new_gallery_count,
            'gallery_by' => auth()->user()->id;,
            'title' => $title,
            'images' => $0,

        ]);*/

        $galleries = new Gallery;
        $galleries->title = $request['title'];
        $galleries->images = 0;
        $galleries->gallery_by = auth()->user()->id;
        $galleries->save();



     //  $dir = '../storage/app/database/users/'.$user_id.'/galleries';

       $dir = public_path().'/database/galleries';

       $gallery_count = (count(scandir($dir)) -2);

       $new_gallery_count = ($gallery_count + 1);

       $new_gallery = File::makeDirectory(public_path().'/database/galleries/'.$galleries->gallery_id , 0775,true);

       $new_gallery_dir = public_path().'/database/galleries/'.$galleries->gallery_id;

       $new_picture_amnt = (count(scandir($new_gallery_dir)) -2);



        if ($request->hasFile('images'))
        {
            foreach ($request->images as $image) {

                $new_picture_amnt = ($new_picture_amnt + 1);

                $extention = $image->getClientOriginalExtension();
                
                $image->move($new_gallery_dir, ($new_picture_amnt .'.'. $extention));
            }
        }

/*        $galleries = Gallery::create([
            //'name' => $data['name'],
            'gallery_id' => $new_gallery_count,
            'gallery_by' => $user_id,
            'title' => $title,
            'images' => $new_picture_amnt,

        ]);*/

         $galleries->images = $new_picture_amnt;
         $galleries->save();



        return redirect('/galleries');



    }


//Taken from w3guy.com, Author: Collins Agbonghama

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::where('gallery_id', $id)->first();
    public function show($gallery_id)
    {
        $gallery = Gallery::where('gallery_id', $gallery_id)->first();


        return view('galleries.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $gallery = Gallery::find($id);

       $gallery->delete();

       // return($gallery);

       return redirect('/galleries');
    }
}
