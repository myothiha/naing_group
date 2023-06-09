@extends('admin.layouts.back')

@section('content')


    <section id="main_content" class="bg slice-sm sct-color-1">
        <div class="container" id="container">
            <!--BEGIN BREADCRUMB-->
            <div class="breadcrumb-pageheader">
                <ol class="breadcrumb sm-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ action('HomeslideController@index') }}">DataTable</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Slide Image</li>
                </ol>
                <h6 class="sm-pagetitle--style-1 has_page_title">Edit Slide Image</h6>
            </div>

            <div class="sm-content">
                <div class="sm-content-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
                                <div class="title_box sm-header-style-1">
                                    
                                    <h6 class="sm-header">
                                        Edit Slide Image
                                    </h6>
                                </div>
                                <div class="sm-box">
                                    <form class="form-default"
                                          action="{{ action('HomeslideController@update', $homeslide->id) }}"
                                          method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="_method" value="PUT">

                                        <hr class="m-t-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="title">Title 1</label>
                                                    <input id="title" name="title1" placeholder="Enter First Title "
                                                           type="text" class="form-control"
                                                           value="{{ $homeslide->title1 }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group has-feedback">
                                                    <label for="title">Title 2</label>
                                                    <input type="text" id="title" name="title2"
                                                           placeholder="Enter Second Title" class="form-control"
                                                           value="{{ $homeslide->title2 }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group ">
                                                    <label for="title2">Link URL</label>
                                                    <input type="text" name="link"
                                                           placeholder="Enter URL for Check Button"
                                                           class="form-control" value="{{ $homeslide->link }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="{{ $homeslide->image }}" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group has-feedback">
                                                    <label for="title">Image</label>
                                                    <input name="image" type="file" class="form-control">
                                                    <input type="hidden" name="prev_image"
                                                           value="{{ $homeslide->image }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-t-20">
                                            <div class="col-lg-12">
                                                <input type="submit" class="btn btn-primary" value="Update">
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
