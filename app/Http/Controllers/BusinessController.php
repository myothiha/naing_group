<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Businessimage;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business      = Business::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.business.index',[
            'business'          => $business,
            'mainbusiness'      => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->file('featureimage')){

        $imagePath = Image::upload( $request->file('featureimage') , '/uploads/business/');
        }
        $business = new Business;

        $business->title                        = $request->title ?? '';
        $business->description                  = $request->description ?? '';
        $business->featureimage                 = $imagePath ?? '';
        $business->save();

        
        
        foreach($request->gallery as $image)
        {
            $businessimage = Image::upload($image, '/uploads/business/');

            $image = new Businessimage();
            $image->image = $businessimage;
            $business->businessimages()->save($image);
        }

    
        return redirect('admin/business');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('admin.business.edit', [

            'business' => $business
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        if($request->file('featureimage')) 
        {
            $imagePath = Image::upload( $request->file('featureimage') , '/uploads/business/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $business->title                    = $request->title ?? '';
        $business->description              = $request->description ?? '';
        $business->featureimage             = $imagePath ?? '';
        $business->save();

        return redirect('admin/business');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return redirect('/admin/business');
    }
}
