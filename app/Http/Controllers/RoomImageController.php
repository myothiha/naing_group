<?php

namespace App\Http\Controllers;

use App\RoomImage;
use App\Room;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Storage;

class RoomImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Room $room)
    {
        //

        $roomimages = RoomImage::where('room_id',$room->id)->get();
        return view('admin.roomimage.index',[
            'roomimages' => $roomimages,
            'room'       => $room,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Room $room)
    {
        //
        
        return view('admin.roomimage.create',[
            'room' => $room,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->file('image')) {

            $imagePath = Image::upload($request->file('image'), '/uploads/roomimage/');
        }
        $roomimage = new RoomImage;
        $roomimage->image = $imagePath;
        $roomimage->room_id = $request->room_id;
        $roomimage->save();

        return redirect("/admin/room/$request->room_id/roomimage");

        // return redirect('/admin/room/$request->room_id/roomimage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoomImage  $roomImage
     * @return \Illuminate\Http\Response
     */
    public function show(RoomImage $roomImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoomImage  $roomImage
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,RoomImage $roomimage)
    {
        //
        return view('admin.roomimage.edit',[
            'room' => $room,
            'roomimage' => $roomimage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoomImage  $roomImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Room $room,RoomImage $roomimage)
    {
        //
         if ($request->file('image')) {
            $imagePath = Image::upload($request->file('image'), '/uploads/roomimage/');
        } else {
            $imagePath = $request->prev_image;
        }
        $roomimage->image = $imagePath;
        $roomimage->room_id = $request->room_id;
        $roomimage->save();

        return redirect("/admin/room/$request->room_id/roomimage");

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoomImage  $roomImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Room $room,RoomImage $roomimage)
    {
        //
        $roomimage->delete();
        return redirect("/admin/room/$room->id/roomimage");


    }
}
