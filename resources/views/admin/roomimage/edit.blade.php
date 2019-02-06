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
                                @include('errors.list')
		                	
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                            Create Room Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form  action="/admin/room/{{ $room->id }}/roomimage/{{ $roomimage->id }} " method="post" enctype="multipart/form-data">
		                    	<input type="hidden" name="_method" value = "PUT">
		                    	{{ csrf_field() }}

		                    	

		                            <hr class="m-t-0">
		                            <div class="row">
		                                <div class="col-12">
		                                    <div class="form-group">
		                                        <img src="{{ $roomimage->image }}" width="100" class="img-fluid">

		                                        <input name="image" type="file" class="form-control">


												<input type="hidden" name="prev_image" value="{{ $roomimage->image }}">
		                                    </div>
		                                </div>
		                            </div>
                                    
                                    
                                    
		                            <input type="hidden" value = "{{ $room->id }}" name = "room_id">
		                            
                                  

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
