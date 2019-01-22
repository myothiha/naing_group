<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $rooms = $project->rooms()->get();

        return view('admin.rooms.index',[
            'project' => $project,
            'rooms'          => $rooms,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('admin.rooms.create', [
                'project' => $project
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {

        $room = new Room;

        $room->name         = $request->name ?? '';
        $room->description         = $request->description ?? '';
        $room->price         = $request->price ?? '';
        $room->width         = $request->width ?? '';
        $room->bedroom         = $request->bedroom ?? '';
        $room->bathroom         = $request->bathroom ?? '';
        $room->floor         = $request->floor ?? '';
        $room->video         = $request->video ?? '';
        $room->project_id   = $request->project_id ?? '';
        $room->save();

        return redirect("admin/project/$request->project_id/room");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room, Project $project)
    {
        return view('admin.room.edit', [
            'project' => $project,
            'room' => $room
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room, Project $project)
    {
        $room->name         = $request->name ?? '';
        $room->description         = $request->description ?? '';
        $room->price         = $request->price ?? '';
        $room->width         = $request->width ?? '';
        $room->bedroom         = $request->bedroom ?? '';
        $room->bathroom         = $request->bathroom ?? '';
        $room->floor         = $request->floor ?? '';
        $room->video         = $request->video ?? '';
        $room->project_id   = $request->project_id ?? '';
        $room->save();

        return redirect("admin/project/$request->project_id/room");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room, Project $project)
    {
        $room->delete();

        return redirect("admin/project/$request->project_id/room");
    }
}
