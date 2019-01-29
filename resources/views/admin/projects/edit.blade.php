@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('ProjectController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Project Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Project Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                       
		                        <h6 class="sm-header">
		                            Edit Project Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-default" action="{{ action('ProjectController@update', $project->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

								<input type="hidden" name="_method" value="PUT">

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="name">Project Name</label>
		                                        <input name="name" placeholder="Enter Project Name "
		                                               type="text" class="form-control" value="{{ $project->name }}">
		                                    </div>
		                                </div>
		                            </div>

									<div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="description">Description</label>
		                                        <textarea name="description" placeholder="Enter Description "
		                                               type="text" class="form-control">{{ $project->description }}</textarea>
		                                    </div>
		                                </div>
		                            </div>


		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group">
		                                        <label for="map">Map</label>
		                                        <textarea type="text" name="map" placeholder="Enter Map Location" class="form-control">{{ $project->map }}</textarea>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="image">Feature Image</label>
		                                        <img src="{{ $project->feature_image }}" width="100" class="img-fluid">

												<input name="feature_image" type="file" class="form-control" >

												<input type="hidden" name="prev_feature_image" value="{{ $project->feature_image }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group has-feedback">
		                                        <label for="image">Banner Image</label>
		                                        <img src="{{ $project->banner_image }}" width="100" class="img-fluid">

												<input name="banner_image" type="file" class="form-control" >

												<input type="hidden" name="prev_image" value="{{ $project->banner_image }}">
		                                    </div>
		                                </div>
		                            </div>
									
									<div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="price">Price</label>
		                                        <input name="price" placeholder="Enter Price "
		                                               type="text" class="form-control" value="{{ $project->price }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="priority">Priority</label>
                                                    <input name="priority" placeholder="Priority"
                                                           type="text" class="form-control" value = " {{ $project->priority}} ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="layout">Layout</label>
                                                    <select name="layout" class="form-control" type="select">                                                
                                                        <option value="4" {{ 4== $project->layout ? 'selected' : ''}}>4 Column</option>
                                                        <option value="8" {{ 8== $project->layout ? 'selected' : ''}} >8 Column</option>
                                                        <option value="12"{{ 12== $project->layout ? 'selected': ''}}>12 Column</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="city">City</label>
		                                        <select name="city_id" class="form-control" type="select">
													@foreach($cities as $city)
												<option value="{{ $city->id }}" {{ $city->id==$project->city_id ? 'selected' : '' }} >
													{{ $city->name }}
												</option>
													@endforeach
												</select>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="status">Status</label>
		                                        <select name="project_status_id" class="form-control" type="select">
													@foreach($project_statuses as $status)
												<option value="{{ $status->id }}" {{ $status->id==$project->project_status_id ? 'selected' : '' }} >
													{{ $status->name }}
												</option>
													@endforeach
												</select>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="type">Type</label>
		                                        <select name="project_type_id" class="form-control" type="select">
													@foreach($project_types as $type)
												<option value="{{ $type->id }}" {{ $type->id==$project->project_type_id ? 'selected' : '' }} >
													{{ $type->name }}
												</option>
													@endforeach
												</select>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
                                            <div class="col-lg-12">
                                                <label for="status">Facility</label>  
                                               

                                                    @php $no = 1; @endphp
                                                    @foreach($facilities as $facility)
                                                    <div class = "checkbox">
                                                        <input type="checkbox" id = "facility{{ $no }}" value = "{{ $facility->id }}" name = "facilities[]"
														@foreach($projectfacilities as $data)
															{{ $facility->id == $data->project_facilities_id ? 'checked' : ''}}																
														@endforeach
                                                        >
                                                        <label for = "facility{{ $no++ }}"> {{ $facility->name }} </label>
                                                    </div>
                                                    @endforeach
                                                    <!--  -->

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