@extends('admin.layouts.back')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('UserController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User Info</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit User Ino</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                            Edit User Info
		                        </h6>
		                    </div>

								@include('errors.list')
				                <form action="{{ action('UserController@update', $user->id) }}" method="POST">
				                <input type="hidden" name="_method" value="PUT">
				                {{ csrf_field() }}
								  <div class="form-row">
								    <div class="form-group col-md-6">
								      <label for="name">Name</label>
								      <input type="name" name="name" class="form-control" value="{{ $user->name }}">
								    </div>
								    <div class="form-group col-md-6">
								      <label for="email">Email Address</label>
								      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="form-group col-md-12">
								      <label for="password">Password</label>
								      <input type="password" name="password" class="form-control" value="{{ $user->password }}">
								    </div>				    
								  </div>
								  <div class="form-row">
								  <button type="submit" class="btn btn-primary form-control">Save </button>
								  </div>
								</form>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>

@endsection