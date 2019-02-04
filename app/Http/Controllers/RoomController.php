<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project;
use App\Room;
use App\RoomFeature;
use Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function floor(Project $project){

        return view('admin.rooms.floor',[
            'project' => $project
        ]);
    }
    public function index(Project $project,$floor)
    {

        $rooms = $project->rooms()->where('floor',$floor)->OrderBy('created_at', 'desc')->get();

        return view('admin.rooms.index', [
            'project' => $project,
            'rooms' => $rooms,
            'floor' => $floor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project,$floor)
    {
        $roomfeatures = RoomFeature::get();
        return view('admin.rooms.create', [
            'project' => $project,
            'roomfeatures' => $roomfeatures,
            'floor'        => $floor,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {



         $validator = Validator::make($request->all(),[
          // 'price'       => 'required|integer',
          // 'width'       => 'required|integer',
          // 'bedroom'     => 'required|integer',
          // 'bathroom'    => 'required|integer',
          'floor'       => 'required|integer',
          'status'      => 'required|integer'

          
          
        ]);
      if($validator->fails()){
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
      }
        $room = new Room;

        $room->name = $request->name ?? '';
        $room->description = $request->description ?? '';
        $room->price = $request->price ?? 1;
        $room->width = $request->width ?? 1;
        $room->bedroom = $request->bedroom ?? 1;
        $room->bathroom = $request->bathroom ?? 1;
        $room->floor = $request->floor ?? '';
        // $room->video = $request->video ?? '';
        $room->project_id = $request->project_id ?? '';
        $room->status     = $request->status;

        $room->save();

        $room->feature()->sync($request->roomfeature);

        return redirect("/admin/project/$request->project_id/floor/$request->floor");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room $room
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Room $room)
    {
        $roomfeatureid = \DB::table('rooms_room_features')->where('room_id',$room->id)->get();
        
        $roomfeatures = RoomFeature::get();

        return view('admin.rooms.edit', [
            'project' => $project,
            'room' => $room,
            'roomfeatures' => $roomfeatures,
            'roomfeatureid'=> $roomfeatureid,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Room $room
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, Room $room)
    {
        $room->name = $request->name ?? '';
        $room->description = $request->description ?? '';
        $room->price = $request->price ?? '';
        $room->width = $request->width ?? '';
        $room->bedroom = $request->bedroom ?? '';
        $room->bathroom = $request->bathroom ?? '';
        $room->floor = $request->floor ?? '';
        // $room->video = $request->video ?? '';
        $room->project_id = $project->id ?? '';
        $room->status     = $request->status;        
        $room->save();
        $room->feature()->sync($request->roomfeature);


        return redirect("/admin/project/$request->project_id/floor/$request->floor");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  \App\Room $room
     * @param Project $project
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, Project $project, Room $room)
    {
        $room->delete();
        return redirect("/admin/project/$project->id/floor/$room->floor");

    }
}
