@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('ProjectTypeController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Room Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Add New Room Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-12">
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
		                            Create Room Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form  action="{{ action('RoomController@store', $project->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="name">Name</label>
		                                        <input name="name" placeholder="Enter name of Name "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label>Project</label>
		                                        <input name="project_name" value="{{ $project->name }}"
		                                               type="text" class="form-control" disabled>
		                                    </div>
                                            <div class="form-group">
		                                        <input name="project_id" value="{{ $project->id }}"
		                                               type="text" class="form-control" hidden>
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="price">Price</label>
		                                        <input name="price" placeholder="Enter name of Price "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="width">Width</label>
		                                        <input name="width" placeholder="Enter name of Width "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="bedroom">Bedroom</label>
		                                        <input name="bedroom" placeholder="Enter name of Bedroom "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="bathroom">Bathroom</label>
		                                        <input name="bathroom" placeholder="Enter name of Bathroom "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="floor">Floor</label>
		                                        <input name="floor" placeholder="Enter name of Floor "
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>
                                    <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="video">Video</label>
		                                        <input name="video" placeholder="Enter name of Video "
		                                               type="text" class="form-control">
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
