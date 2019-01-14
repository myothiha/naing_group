<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys      = Gallery::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.gallerys.index',[
            'gallerys'     => $gallerys,
            'projecttag'        => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/gallerys/');
        }
        $gallery = new Gallery;

        $gallery->title             = $request->title ?? '';
        $gallery->image             = $imagePath ?? '';
        $gallery->save();

        return redirect('admin/gallery');
    }

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
        return view('admin.gallerys.edit', [

            'gallery' => $gallery
            ]);
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
        if($request->file('image')) 
        {
            $imagePath = Image::upload( $request->file('image') , '/uploads/gallerys/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $gallery->title          = $request->title ?? '';
        $gallery->image           = $imagePath ?? '';
        $gallery->save();

        return redirect('admin/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect('/admin/gallery');
    }
}
