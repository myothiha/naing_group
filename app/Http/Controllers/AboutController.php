<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts  = About::all();
        return view('admin.abouts.index',[
            'abouts'     => $abouts
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouts.create');
    
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

        $imagePath = Image::upload( $request->file('image') , '/uploads/aboutus/');
        }
        $about = new About;

        $about->about               = $request->about ?? '';
        $about->vision             = $request->vision ?? '';
        $about->mission             = $request->mission ?? '';
        $about->value               = $request->value ?? ''; 
        $about->interior            = $request->interior ?? '';
        $about->image               = $imagePath ?? '';
        $about->save();

        return redirect('admin/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        // return response($about);
        return view('admin.abouts.edit', [

            'about' => $about
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
         if($request->file('image')) 
        {
            $imagePath = Image::upload( $request->file('image') , '/uploads/aboutus/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $about->about           = $request->about ?? '';
        $about->vision          = $request->vision ?? '';
        $about->mission         = $request->mission ?? '';
        $about->value           = $request->value ?? '';
        $about->interior        = $request->interior ?? '';
        $about->image           = $imagePath ?? '';
        $about->save();

        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect('admin/about');
    }
}
