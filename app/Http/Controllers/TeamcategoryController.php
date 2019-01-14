<?php

namespace App\Http\Controllers;

use App\Teamcategory;
use Illuminate\Http\Request;

class TeamcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamcategorys = Teamcategory::orderBy('created_at','desc')->get();

        return view('admin.teamcategorys.index',[
            'teamcategorys' => $teamcategorys
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamcategorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $teamcategory = new Teamcategory;

        $teamcategory->title                   = $request->title ?? '';
       
        $teamcategory->save();

        return redirect('admin/teamcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teamcategory  $teamcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Teamcategory $teamcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teamcategory  $teamcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Teamcategory $teamcategory)
    {
       return view('admin.teamcategorys.edit', [

            'teamcategory' => $teamcategory,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teamcategory  $teamcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teamcategory $teamcategory)
    {
        
        $teamcategory->title                   = $request->title ?? '';
       
        $teamcategory->save();

        return redirect('admin/teamcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teamcategory  $teamcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teamcategory $teamcategory)
    {
        $teamcategory->delete();

        return redirect('/admin/teamcategory');
    }
}
