<?php

namespace App\Http\Controllers;

use App\Homeslide;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Auth;

class HomeslideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeslides = Homeslide::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.homeslides.index', [
            'homeslides' => $homeslides,
            'menu' => 'active',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeslides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {

            $imagePath = Image::upload($request->file('image'), '/uploads/homeslides/');
        }

        $homeslide = new Homeslide;

        $homeslide->title1 = $request->title1 ?? '';
        $homeslide->title2 = $request->title2 ?? '';
        $homeslide->image = $imagePath ?? '';
        $homeslide->link = $request->link;
            $homeslide->save();

        return redirect('admin/homeslide');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homeslide $homeslide
     * @return \Illuminate\Http\Response
     */
    public function show(Homeslide $homeslide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homeslide $homeslide
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeslide $homeslide)
    {
        return view('admin.homeslides.edit', [

            'homeslide' => $homeslide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Homeslide $homeslide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeslide $homeslide)
    {
        if ($request->file('image')) {
            $imagePath = Image::upload($request->file('image'), '/uploads/homeslide/');
        } else {
            $imagePath = $request->prev_image;
        }

        $homeslide->title1 = $request->title1 ?? '';
        $homeslide->title2 = $request->title2 ?? '';
        $homeslide->link = $request->link;
        $homeslide->image = $imagePath ?? '';
        $homeslide->save();

        return redirect('admin/homeslide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homeslide $homeslide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeslide $homeslide)
    {
        $homeslide->delete();

        return redirect('admin/homeslide');
    }
}
