@extends('admin.layouts.back')

@section('content')


<section id="main_content" class="bg slice-sm sct-color-1">
    <div class="container" id="container">
        <!--BEGIN BREADCRUMB-->
        <div class="breadcrumb-pageheader">
            <ol class="breadcrumb sm-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('CsrimageController@index', $csr->id ) }}">DataTable</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit CSR Gallery Form</li>
            </ol>
            <h6 class="sm-pagetitle--style-1 has_page_title">Edit CSR Gallery Form</h6>
        </div>

		<div class="sm-content">
		    <div class="sm-content-box">
		        <div class="row">
		            <div class="col-lg-6">
		                <div class="sm-wrapper" data-sortable-id="sm_form_elements_1">
		                    <div class="title_box sm-header-style-1">
		                        
		                        <h6 class="sm-header">
		                            Edit CSR Gallery Form
		                        </h6>
		                    </div>
		                    <div class="sm-box">
		                    	<form class="form-horizontal" action="{{ action('CsrimageController@update', [$csr->id, $csrimage->id]) }}" method="post"
				                      enctype="multipart/form-data">

				                    {{ csrf_field() }}
				                    <input type="hidden" name="_method" value="PUT">

				                    <img src="{{ $csrimage->image }}" width="300px">

				                    <div class="form-group">
				                        <label for="image" class=" form-control-label">CSR Images</label>
				                        <input type="hidden" name="prevImage" value="{{ $csrimage->image }}">
				                        <input type="file" name="currentImage" class="form-control">
				                    </div>

				                    <div class="form-group">
				                        <button class="btn btn-warning form-control" type="submit">Submit</button>
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