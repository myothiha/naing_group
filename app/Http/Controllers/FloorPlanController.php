<?php

namespace App\Http\Controllers;

use App\Room;
use App\FloorPlan;
use App\Util\Uploader\Image;
use Illuminate\Http\Request;

class FloorPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Room $room)
    {
        //
        $floorplans = FloorPlan::where('room_id',$room->id)->get();
        return view('admin.floorplan.index',[
            'floorplans' => $floorplans,
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
        return view('admin.floorplan.create',[
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

            $imagePath = Image::upload($request->file('image'), '/uploads/floorplan/');
        }
        $floorplan = new FloorPlan;
        $floorplan->floor_plans = $imagePath;
        $floorplan->room_id = $request->room_id;
        $floorplan->save();

        return redirect("/admin/room/$request->room_id/floorplan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function show(FloorPlan $floorPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Room $room,FloorPlan $floorplan)
    {
        //
        return view('admin.floorplan.edit',[
            'room' =>  $room,
            'floorplan' => $floorplan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Room $room,FloorPlan $floorplan)
    {
        //
          if ($request->file('image')) {
            $imagePath = Image::upload($request->file('image'), '/uploads/floorplan/');
        } else {
            $imagePath = $request->prev_image;
        }
        $floorplan->floor_plans = $imagePath;
        $floorplan->room_id = $request->room_id;
        $floorplan->save();

        return redirect("/admin/room/$request->room_id/floorplan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room,FloorPlan $floorplan)
    {
        //
        $floorplan->delete();
        return redirect("/admin/room/$floorplan->room_id/floorplan");

    }
}
