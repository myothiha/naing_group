<?php

namespace App\Http\Controllers;

use App\Blogimage;
use App\Blog;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;

class BlogimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($blogId)
    {
        $blog = Blog::find($blogId);
        $blogimages = $blog->blogimages;
        return view('admin.blogimages.index', [
            'blog'              => $blog,
            'blogimages'        => $blogimages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogId)
    {
       $blog = Blog::find($blogId);
        return view("admin.blogimages.create", [
            'blog' => $blog,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $blogId)
    {
        $blog = Blog::find($blogId);

        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/blogs/');
        }
        $blogimage = new Blogimage;

        $blogimage->image             = $imagePath ?? '';
        $blogimage->blog_id = $blogId;
        $blogimage->save();

        return redirect("/admin/blog/{$blogId}/blogimage");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogimage  $blogimage
     * @return \Illuminate\Http\Response
     */
    public function show(Blogimage $blogimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogimage  $blogimage
     * @return \Illuminate\Http\Response
     */
    public function edit($blogId, $blogimageId)
    {
        $blog = Blog::find($blogId);
        $blogimage = blogimage::find($blogimageId);
        return view("admin.blogimages.edit", [
            'blog' => $blog,
            'blogimage' => $blogimage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogimage  $blogimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blogId, $blogimageId)
    {
        $blog = Blog::find($blogId);
        $blogimage = Blogimage::find($blogimageId);
        if ($request->currentImage) {
            $imagePath = Image::upload($request->currentImage, '/uploads/blogs/');
        } else {
            $imagePath = $request->prevImage;
        }

        $blogimage->image = $imagePath;
        $blogimage->save();

        return redirect("/admin/blog/{$blogId}/blogimage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogimage  $blogimage
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogId, $blogimageId)
    {
        $blog = blogimage::find($blogimageId);
        $blog->delete();
        return redirect("/admin/blog/{$blogId}/blogimage");
    }
}
