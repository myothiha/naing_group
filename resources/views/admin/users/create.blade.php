@extends('admin.layouts.back')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('UserController@index') }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Register Form</h6>
        </div>

 		<div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
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
                                     Register
                                </h6>
                            </div>
                            <div class="sm-box">
                                

                                <div id="toolbar">
                                    <button id="remove" class="btn btn-warning">
                                        <i class="ion-ios-plus"></i><a href="{{ action("UserController@create") }}"> Add New
                                    </a></button>
                                </div>

									@include('errors.list')
					                <form action="{{ action('UserController@store')}}" method="POST">
					                {{ csrf_field() }}
									  <div class="form-row">
									    <div class="form-group col-md-6">
									      <label for="name">Name</label>
									      <input type="name" name="name" class="form-control" placeholder="name">
									    </div>
									    <div class="form-group col-md-6">
									      <label for="email">Email Address</label>
									      <input type="email" name="email" class="form-control" placeholder="Email">
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="form-group col-md-12">
									      <label for="password">Password</label>
									      <input type="text" name="password" class="form-control" placeholder="password">
									    </div>				    
									  </div>
									  <div class="form-row">
									  <button type="submit" class="btn btn-primary form-control">Register</button>
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