@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('TeamController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Our People Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Our People Form</h6>
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
		                            Edit Our People Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-default" action="{{ action('TeamController@update', $team->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

								<input type="hidden" name="_method" value="PUT">

		                            <hr class="m-t-0">

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="type">Type</label>
		                                        <select name="type" class="form-control" type="select">
													<option>select one</option>
													<option value="FEC">FEC</option>
													<option value="Honorable">Honorable</option>
													<option value="Representative">Representative</option>			
													
												</select>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="image">Photo</label>
		                                        <img src="{{ $team->image }}" width="100" class="img-fluid">

												<input name="image" type="file" class="form-control" >

												<input type="hidden" name="prev_image" value="{{ $team->image }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="position">Position</label>
		                                        <input name="position" placeholder="Enter Position"
		                                               type="text" class="form-control" value="{{ $team->position }}" >
		                                    </div>
		                                </div>
		                            </div>

									
									<div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="name">Name</label>
		                                        <input  name="name" placeholder="Enter Your Name "
		                                               type="text" class="form-control" value="{{ $team->name }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="biography">Biography</label>
		                                        <textarea  name="biography" placeholder="Enter Your biography "
		                                               type="text" class="form-control">{{ $team->biography }}</textarea>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="facebook">Facebook Profile URL</label>
		                                        <input name="facebook" placeholder="Enter Link "
		                                               type="text" class="form-control" value="{{ $team->facebook }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="google">Google Profile URL</label>
		                                        <input name="google" placeholder="Enter Link "
		                                               type="text" class="form-control" value="{{ $team->google }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="twitter">Twitter Profile URL</label>
		                                        <input name="twitter" placeholder="Enter Link "
		                                               type="text" class="form-control" value="{{ $team->twitter }}">
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