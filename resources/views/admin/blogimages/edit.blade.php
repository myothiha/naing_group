@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('BlogimageController@index', $blog->id) }})">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Blog Gallery Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Blog Gallery Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        <div class="sm-actions">
		                            <a href="javascript:void(0)"
		                               class="tooltip_cus fullscreen_element">
		                                <span class="extra-tooltip">Fullscreen</span>
		                                <i class="material-icons">fullscreen</i>
		                            </a>
		                            <a href="javascript:void(0)"
		                               class="tooltip_cus refresh_element">
		                                <span class="extra-tooltip">Refresh</span>
		                                <i class="material-icons">refresh</i>
		                            </a>
		                            <a href="javascript:void(0)"
		                               class="tooltip_cus minimize_element">
		                                <span class="extra-tooltip">Collapse / Expand</span>
		                                <i class="material-icons">import_export</i>
		                            </a>
		                            <a href="javascript:void(0)" class="tooltip_cus remove_element">
		                                <span class="extra-tooltip">Remove</span>
		                                <i class="material-icons">close</i>
		                            </a>
		                        </div>
		                        <h6 class="sm-header">
		                            Edit Blog Gallery Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-horizontal" action="{{ action('BlogimageController@update', [$blog->id, $blogimage->id]) }}" method="post"
				                      enctype="multipart/form-data">

				                    {{ csrf_field() }}
				                    <input type="hidden" name="_method" value="PUT">

				                    <img src="{{ $blogimage->image }}"width="300px">

				                    <div class="form-group">
				                        <label for="image" class=" form-control-label">Blog Images</label>
				                        <input type="hidden" name="prevImage" value="{{ $blogimage->image }}">
				                        <input type="file" name="currentImage" class="form-control">
				                    </div>

				                    <div class="form-group">
				                        <button class="btn btn-warning form-control" type="submit">Submit</button>
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