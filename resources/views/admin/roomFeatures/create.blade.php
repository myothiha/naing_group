@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('RoomFeatureController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Room Feature Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Add New Feature Type Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                       
		                        <h6 class="sm-header">
		                            Room Type Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form  action="{{ action('RoomFeatureController@store') }}" method="post" enctype="multipart/form-data">
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
		                                        <label for="icon">Icon</label>
		                                        <input name="icon" placeholder="Enter name of Icon "
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
