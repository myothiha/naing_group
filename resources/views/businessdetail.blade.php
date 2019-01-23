@extends('layouts.front')

@section('content')

@include('layouts.menu')

 <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/business">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Business Units</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">{{ $business->title }}</h2>
        </div>

        <div class="">
            <img src="{{ $business->featureimage }}" alt="" class="img-fluid" data-aos="fade-up">
            <p class="pt-4" data-aos="fade-down">
                {{ $business->description }}
            </p>
        </div>
    </div>

    <!-- ACCOMMODATION -->
    <section class="gallery-block grid-gallery" data-aos="fade-up">
        <div class="container">
            <h6 class="" data-aos="fade-right">GALLERY Our Business Gallery</h6>

            <div class="row">
                @foreach($business->businessimages as $image)
                <div class="col-md-3 col-6 item">
                    <a class="lightbox" href="{{ $image->image }}" data-aos="fade-left">
                        <img class="img-fluid image scale-on-hover" src="{{ $image->image }}">
                    </a>
                </div>
                @endforeach 
                

            </div>

        </div>
    </section>

    <section class="joyus py-4">
        <div class="container my-4">
            <h6 class="text-white" data-aos="fade-down">RELATED Our Business</h6>
            <div class="row" data-aos="fade-up">
                @foreach($businesses as $data)
                <div class="col-md-4">
                    <a href="/businessdetail/{{ $data->id }}">
                        <img src="{{ $data->featureimage }}" alt="" class="img-fluid border border-secondary">
                        <h6 class="text-white my-3">{{ $data->title }}</h6>
                        <p class="text-white">{!! substr(strip_tags($data->description), 0, 400) !!}</p>
                    </a>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

     

@endsection