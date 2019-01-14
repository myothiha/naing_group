<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Blogcategory;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs      = blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blogs.index',[
            'blogs'     => $blogs
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcategories = Blogcategory::all();
        return view('admin.blogs.create',[
            'blogcategories' => $blogcategories
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
        if($request->file('featureimage')){

        $imagePath = Image::upload( $request->file('featureimage') , '/uploads/blogs/');
        }
        $blog = new Blog;

        $blog->title                        = $request->title ?? '';
        $blog->description                  = $request->description ?? '';
        $blog->author                       = $request->author ?? '';
        $blog->blogcategory_id              = $request->blogcategory_id ?? '';
        $blog->featureimage                 = $imagePath ?? '';
        $blog->save();

        return redirect('admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogcategorys = Blogcategory::all();
        return view('admin.blogs.edit', [

            'blog' => $blog,
            'blogcategorys' => $blogcategorys
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if($request->file('featureimage')) 
        {
            $imagePath = Image::upload( $request->file('featureimage') , '/uploads/blogs/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $blog->title                    = $request->title ?? '';
        $blog->description              = $request->description ?? '';
        $blog->author                   = $request->author ?? '';
        $blog->blogcategory_id          = $request->blogcategory_id ?? '';
        $blog->featureimage             = $imagePath ?? '';
        $blog->save();

        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/admin/blog');
    }
}
