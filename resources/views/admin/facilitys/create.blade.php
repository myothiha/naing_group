@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('ProjectFacilitiesController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New </li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Add New Project Facility</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                            Project Facility Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form  action="{{ action('ProjectFacilitiesController@store') }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group ">
		                                        <label for="name">Name</label>
		                                        <input type="text"  name="name"
		                                               placeholder="Enter Title" class="form-control">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="icon">Icon (Example fa-bath, fa-shapes etc...)</label>
		                                        <input name="icon" placeholder="Enter Icon name "
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