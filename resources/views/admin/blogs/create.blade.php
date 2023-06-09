@extends('admin.layouts.back')

@section('content')


    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ action('BlogController@index') }}">DataTable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Blogs Form</li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Add New Blogs Form</h6>
            </div>

            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                                @include('errors.list')
                                <div class="title_box sm-header-style-1">
                                    
                                    <h6 class="sm-header">
                                        Blog Form
                                    </h6>
                                </div>
                                <div class="sm-box">
                                    <form action="{{ action('BlogController@store') }}" method="post"
                                          enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <hr class="m-t-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input name="title" placeholder="Enter Title "
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" placeholder="Enter Description "
                                                              type="text" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group">
		                                        <label for="image">Image</label>
		                                        <input type="file" name="featureimage" class="form-control">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group">
		                                        <label for="image">Gallery</label>
		                                        <input type="file" name="gallery[]" class="form-control" multiple>
		                                    </div>
		                                </div>
		                            </div>
									
									<div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="description">Description</label>
		                                        <textarea name="description" placeholder="Enter Description "
		                                               type="text" class="form-control"></textarea>
		                                    </div>
		                                </div>
		                            </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="author">Author</label>
                                                    <input name="author" placeholder="Enter Author "
                                                           type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="author">Category</label>
                                                    <select name="blogcategory_id" class="form-control" type="select">
                                                        <option>select one</option>
                                                        @foreach($blogcategories as $blogcategory)
                                                            <option value="{{ $blogcategory->id }}">{{ $blogcategory->name }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="tag_id">Tag</label>
                                                    <select name="tag_id[]" id="tag_id" class="form-control" type="select" multiple>
                                                        @foreach($tags as $tag)
                                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-t-20">
                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-primary" value="Add New">
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection