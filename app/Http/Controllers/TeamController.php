<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams      = Team::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.teams.index',[
            'teams'     => $teams,
            'mainteam'  =>'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/teams/');
        }
        $team = new Team;

        $team->type                         = $request->type ?? '';
        $team->facebook                     = $request->facebook ?? '';
        $team->position                     = $request->position ?? '';
        $team->name                         = $request->name ?? '';
        $team->biography                    = $request->biography ?? '';
        $team->google                       = $request->google ?? '';
        $team->twitter                      = $request->twitter ?? '';
        $team->image                        = $imagePath ?? '';
        $team->save();

        return redirect('admin/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', [

            'team' => $team,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        if($request->file('image')) 
        {
            $imagePath = Image::upload( $request->file('image') , '/uploads/teams/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $team->type                         = $request->type ?? '';
        $team->facebook                     = $request->facebook ?? '';
        $team->position                     = $request->position ?? '';
        $team->name                         = $request->name ?? '';
        $team->biography                    = $request->biography ?? '';        
        $team->google                       = $request->google ?? '';
        $team->twitter                      = $request->twitter ?? '';
        $team->image                        = $imagePath ?? '';
        $team->save();

        return redirect('admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect('/admin/team');
    }
}
