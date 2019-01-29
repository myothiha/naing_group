@extends('admin.layouts.back')

@section('content')

<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">DataTables Register</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">DataTables Register</h6>
        </div>

 		<div class="sm-content">
            <div class="sm-content-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sm-wrapper">
                            <div class="title_box sm-header-style-1">
                                
                                <h6 class="sm-header">
                                    DataTables Register
                                </h6>
                            </div>
                            <div class="sm-box">
                                

                                <div id="toolbar" style="margin-bottom: 10px;">
                                    <button id="remove" class="btn btn-warning">
                                        <i class="ion-ios-plus"></i><a href="{{ action("UserController@create") }}"> Add New
                                    </a></button>
                                </div>
                                

                                <table id="data-table" class="table table-striped table-bordered">
								  <thead class="thead-default">
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">Name</th>
								      <th scope="col">Email</th>
								      <th>Action</th>
								    </tr>
								  </thead>
								  <tbody>
									<?php $no=1; ?>
									@foreach($users as $user)
								    <tr>
								      <th scope="row">{{ $no++ }}</th>
								      <td>{{ $user->name }}</td>
								      <td>{{ $user->email }}</td>			      
								      <td>
									      <form action="{{action('UserController@destroy',   		$user->id) }}" method="Post">
										      	<input type="hidden" name="_method" value="delete">
										      	{{ csrf_field() }}
										      	<a class="btn btn-warning" href="/admin/user/{{ $user->id }}/edit">Edit</a>

										      	<input type="submit" class="btn btn-danger" value="Delete">
									        </form>
									  </td>
								    </tr>
								    @endforeach
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection