<?php

namespace App\Http\Controllers;

use App\Blogcategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class BlogcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogcategorys = Blogcategory::orderBy('created_at', 'desc')->get();

        return view('admin.blogcategorys.index',[
            'blogcategorys' => $blogcategorys
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogcategorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogcategory = new Blogcategory;

        $blogcategory->name         = $request->name ?? '';
        $blogcategory->save();

        return redirect('admin/blogcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Blogcategory $blogcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogcategory $blogcategory)
    {
        return view('admin.blogcategorys.edit',[
            'blogcategory'  => $blogcategory
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogcategory $blogcategory)
    {
        $blogcategory->name         = $request->name ?? '';

        $blogcategory->save();
        return redirect('admin/blogcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogcategory $blogcategory)
    {
        $blogcategory->delete();

        return redirect('admin/blogcategory');
    }
}
