@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('IndexdataController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Index Data Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit Index Data Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                            Edit Index Data Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	@include('errors.list')
		                    	<form class="form-default" action="{{ action('ContactController@update', $contact->id) }}" method="post" enctype="multipart/form-data">
		                    	{{ csrf_field() }}

								<input type="hidden" name="_method" value="PUT">

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="address">Address</label>
		                                       <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
		                                    </div>
		                                </div>
		                            </div>

									<div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="phone">Phone Number</label>
		                                        <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="mail">Email</label>
		                                        <input type="text" name="mail" class="form-control" value="{{ $contact->mail }}">
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <label for="office">Office Hours</label>
		                                        <input type="text" name="office" class="form-control" value="{{ $contact->office }}">
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