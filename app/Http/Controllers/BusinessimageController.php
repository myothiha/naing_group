<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use App\Business;
use App\Businessimage;

class BusinessimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($businessId)
    {
        $business = Business::find($businessId);
        $businessimages = $business->businessimages;
        return view('admin.businessimages.index', [
            'business' => $business,
            'businessimages' => $businessimages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($businessId)
    {
       $business = Business::find($businessId);
        return view("admin.businessimages.create", [
            'business' => $business,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $businessId)
    {
        $business = Business::find($businessId);

        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/business/');
        }
        $businessimage = new Businessimage;

        $businessimage->image             = $imagePath ?? '';
        $businessimage->business_id = $businessId;
        $businessimage->save();

        return redirect("/admin/business/{$businessId}/businessimage");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Businessimage  $businessimage
     * @return \Illuminate\Http\Response
     */
    public function show(Businessimage $businessimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Businessimage  $businessimage
     * @return \Illuminate\Http\Response
     */
    public function edit($businessimageId,$businessId)
    {
        $business = Business::find($businessId);
        $businessimage = Businessimage::find($businessimageId);
        return view("admin.businessimages.edit", [
            'business' => $business,
            'businessimage' => $businessimage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Businessimage  $businessimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$businessimageId, $businessId)
    {
        $business = Business::find($businessId);
        $businessimage = Businessimage::find($businessimageId);
        if ($request->currentImage) {
            $imagePath = Image::upload($request->currentImage, '/uploads/business/');
        } else {
            $imagePath = $request->prevImage;
        }

        $businessimage->image = $imagePath ?? '';
        $businessimage->business_id = $businessId;
        $business->images()->save($businessimageId);

        return redirect("/admin/business/{$businessId}/businessimage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Businessimage  $businessimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($businessimage_id)
    {
        $businessimage= Businessimage::find($id);
        $businessimage->delete();
        return redirect("/admin/business/{$businessId}/businessimage");
    }
}
