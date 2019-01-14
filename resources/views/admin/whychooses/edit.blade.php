@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('WhychooseController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Why Choose Us</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Why Choose Us</h6>
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
		                            Edit Why Choose Us Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-default" action="{{ action('WhychooseController@update', $whychoose->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

								<input type="hidden" name="_method" value="PUT">

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="icon">Icon</label>
		                                        <input id="title" name="icon" 
		                                               type="text" class="form-control" value="{{ $whychoose->icon}}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="title">Title</label>
		                                        <input type="text" id="title" name="title"
		                                               class="form-control" value="{{ $whychoose->title }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="description">Description</label>
												<textarea type="text" class="form-control" name="description">{{ $whychoose->description }}</textarea>
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