@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('MilestoneController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Mile-Stones</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Add New Mile-Stone</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                           Mile-Stone Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form  action="{{ action('MilestoneController@store') }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="title">Title</label>
		                                        <input name="title" placeholder="Enter Title"
		                                               type="text" class="form-control">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-lg-12">
		                                    <div class="form-group">
		                                        <label for="image">Image</label>
		                                        <input type="file" name="image" class="form-control">
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
		                                        <label for="location">Location</label>
		                                        <textarea name="location" placeholder="Enter Location or address "
		                                               type="text" class="form-control"></textarea>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="date">Completion Date</label>
		                                        <input name="date" placeholder="Enter Completion Date "
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