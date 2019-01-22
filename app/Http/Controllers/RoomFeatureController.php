<?php

namespace App\Http\Controllers;

use App\RoomFeature;
use Illuminate\Http\Request;

class RoomFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomFeatures = RoomFeature::orderBy('created_at', 'desc')->get();

        return view('admin.roomFeatures.index',[
            'roomFeatures'          => $roomFeatures,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomFeatures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roomFeature = new RoomFeature;

        $roomFeature->name         = $request->name ?? '';
        $roomFeature->icon         = $request->icon ?? '';
        $roomFeature->save();

        return redirect('admin/room-features');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomFeature  $roomFeature
     * @return \Illuminate\Http\Response
     */
    public function show(RoomFeature $roomFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomFeature  $roomFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomFeature $roomFeature)
    {
        return view('admin.roomFeatures.edit', [

            'roomFeature' => $roomFeature
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomFeature  $roomFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomFeature $roomFeature)
    {
        $roomFeature->name         = $request->name ?? '';
        $roomFeature->icon         = $request->icon ?? '';
        $roomFeature->save();

        return redirect('admin/room-features');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomFeature  $roomFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomFeature $roomFeature)
    {
        $roomFeature->delete();

        return redirect('admin/room-features');
    }
}
