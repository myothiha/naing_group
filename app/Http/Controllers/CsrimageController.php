<?php

namespace App\Http\Controllers;

use App\Csrimage;
use Illuminate\Http\Request;
use App\Csr;
use App\Util\Uploader\Image;


class CsrimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($csrId)
    {
        $csr = Csr::find($csrId);
        $csrimages = $csr->csrimages;
        return view('admin.csrimages.index', [
            'csr'           => $csr,
            'csrimages'     => $csrimages,
            'maincsr'        => 'active',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($csrId)
    {
       $csr= Business::find($csrId);
        return view("admin.csrimages.create", [
            'csr' => $csr,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $csrId)
    {
        $csr = Csr::find($csrId);

        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/csrs/');
        }
        $csrimage = new Csrimage;

        $csrimage->image             = $imagePath ?? '';
        $csrimage->csr_id = $csrId;
        $csrimage->save();

        

        return redirect("/admin/csr/{$csrId}/csrimage");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Csrimage  $csrimage
     * @return \Illuminate\Http\Response
     */
    public function show(Csrimage $csrimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Csrimage  $csrimage
     * @return \Illuminate\Http\Response
     */
    public function edit($csrId, $csrimageId)
    {
        $csr = Csr::find($csrId);
        $csrimage = Csrimage::find($csrimageId);
        return view("admin.csrimages.edit", [
            'csr' => $csr,
            'csrimage' => $csrimage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Csrimage  $csrimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $csrId, $csrimageId)
    {
        $csr = Csr::find($csrId);
        $csrimage = Csrimage::find($csrimageId);
        if ($request->currentImage) {
            $imagePath = Image::upload($request->currentImage, '/uploads/csrs/');
        } else {
            $imagePath = $request->prevImage;
        }

        $csrimage->image = $imagePath;
        $csrimage->save();

        return redirect("/admin/csr/{$csrId}/csrimage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Csrimage  $csrimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($csrId, $csrimageId)
    {
        $csr = Csrimage::find($csrimageId);
        $csr->delete();
        return redirect("/admin/csr/{$csrId}/csrimage");
    }
}
