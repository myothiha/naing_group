@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('GalleryController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Project Gallery</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Project Gallery</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                       
		                        <h6 class="sm-header">
		                            Edit Project Gallery
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-default" action="{{ action('GalleryController@update', $gallery->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

								<input type="hidden" name="_method" value="PUT">

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="title">Title </label>
		                                        <input id="title" name="title" type="text" class="form-control" value="{{ $gallery->title1 }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="title">Image</label>
		                                        <img src="{{ $gallery->image }}" width="100" class="img-fluid">

												<input name="image" type="file" class="form-control" >

												<input type="hidden" name="prev_image" value="{{ $gallery->image }}">
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