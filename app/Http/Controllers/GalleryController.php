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

        return view('galleries.index',compact('galleries'));
    }

    public function upload()
    {
        return view('galleries.upload');
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

     //  $dir = '../storage/app/database/users/'.$user_id.'/galleries';

       $dir = public_path().'/database/users/'.$user_id.'/galleries';

       $gallery_count = (count(scandir($dir)) -2);

       $new_gallery_count = ($gallery_count + 1);

       $new_gallery = File::makeDirectory(public_path().'/database/users/'.$user_id.'/galleries/'.$new_gallery_count , 0775,true);

       $new_gallery_dir = public_path().'/database/users/'.$user_id.'/galleries/'.$new_gallery_count;

       $new_picture_amnt = (count(scandir($new_gallery_dir)) -2);

       $title = $request->input('title');



        if ($request->hasFile('images'))
        {
            foreach ($request->images as $image) {

                $new_picture_amnt = ($new_picture_amnt + 1);

                $extention = $image->getClientOriginalExtension();
                
                //$image_name = $image->getClientOriginalName();

                // $new_image_name = ($amnt_pictures + 1)

                // Storage::move('hodor/file1.jpg', 'holdthedoor/file2.jpg');

                $image->move($new_gallery_dir, ($new_picture_amnt .'.'. $extention));
            }
        }

        $galleries = Gallery::create([
            //'name' => $data['name'],
            'gallery_id' => $new_gallery_count,
            'gallery_by' => $user_id,
            'title' => $title,
            'images' => $new_picture_amnt,

        ]);



        return view('galleries.index', compact('galleries'));



    }


//Taken from w3guy.com, Author: Collins Agbonghama

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
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
    public function destroy(Gallery $gallery)
    {
        //
    }
}
