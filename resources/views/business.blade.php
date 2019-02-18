@extends('layouts.front')

@section('content')

@include('layouts.menu')

<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Business Units</li>
                </ol>
            </nav>
        </div>
    </section>
<div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">Our Business Units </h2>
        </div>


        <div class="container text-center my-3">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                 @foreach($business as $key => $data)
                    @php $businessimages = $data->businessimages @endphp


                    <div class="carousel-item row no-gutters {{ $key == 0 ? "active" : "" }}"">
                        @foreach($businessimages as $businessimage)                      
                        <div class="col-4 float-left">
                            @if(empty($businessimage))
                            <img class="img-fluid" src="{{ $data->featureimage  }}">
                            @else
                            <img class="img-fluid" src="{{ $businessimage->image }}">                                
                            @endif
                             <div class="carousel-caption d-none d-md-block d-flex justify-content-center">
                                <h5 class="business-banner-title">{{ $data->title }}</h5>
                                <a class = "btn btn-warning business-banner-btn" href="/businessdetail/{{ $data->id }}">Check Business Unit</a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                @endforeach
                </div>
               
            </div>
        </div>

</div>

@endsection