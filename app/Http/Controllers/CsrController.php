<?php

namespace App\Http\Controllers;

use App\Csr;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Csrimage;

class CsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csrs      = Csr::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.csrs.index',[
            'csrs'          => $csrs,
            'maincsr'       => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.csrs.create');
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

        $imagePath = Image::upload( $request->file('featureimage') , '/uploads/csrs/');
        }
        $csr = new Csr;

        $csr->title                        = $request->title ?? '';
        $csr->description                  = $request->description ?? '';
        $csr->featureimage                 = $imagePath ?? '';
        $csr->save();

        foreach($request->gallery as $image)
        {
            $csrimage = Image::upload($image, '/uploads/csrs/');

            $image = new Csrimage();
            $image->image = $csrimage;
            $csr->csrimages()->save($image);
        }

        return redirect('admin/csr');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function show(Csr $csr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function edit(Csr $csr)
    {
        return view('admin.csrs.edit',[
            'csr'  => $csr
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Csr $csr)
    {
        if($request->file('featureimage')) 
        {
            $imagePath = Image::upload( $request->file('featureimage') , '/uploads/csrs/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $csr->title                    = $request->title ?? '';
        $csr->description              = $request->description ?? '';
        $csr->featureimage             = $imagePath ?? '';
        $csr->save();

        return redirect('admin/csr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Csr  $csr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Csr $csr)
    {
        $csr->delete();

        return redirect('admin/csr');
    }
}
