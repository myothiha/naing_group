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

        <div id="carouselExampleIndicators" class="carousel slide banner" data-ride="carousel">
            <div class="carousel-inner banner-inner">
                @if(empty($business))
                    <h3> Coming Soon </h3>
                @else

                @foreach($business as $key => $data)

                <div class="carousel-item {{ $key == 0 ? "active" : "" }}">
                    <img class="d-block w-100" height = "500" src="{{ $data->featureimage }}" alt="First slide">

                    <div class="carousel-caption d-none d-md-block d-flex justify-content-center">
                        <h3 class="banner-title">{{ $data->title }}</h3>
                        <a class = "btn btn-warning banner-btn" href="/businessdetail/{{ $data->id }}">Check Business Unit</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
          <div>
        </div>

         <div id="carouselExampleIndicators1" class="carousel slide banner" data-ride="carousel">
            <div class="carousel-inner banner-inner">
                @if(empty($business1))
                    <h3> Coming Soon </h3>
                @else

                @foreach($business1 as $key => $data)

                <div class="carousel-item {{ $key == 0 ? "active" : "" }}">
                    <img class="d-block w-100" height = "500" src="{{ $data->featureimage }}" alt="First slide">

                    <div class="carousel-caption d-none d-md-block d-flex justify-content-center">
                        <h3 class="banner-title">{{ $data->title }}</h3>
                        <a class = "btn btn-warning banner-btn" href="/businessdetail/{{ $data->id }}">Check Business Unit</a>
                        
                    </div>
                </div>
               
                
                @endforeach
                @endif
            </div>
          <div>
        </div>
    </div>
    </div>
</div>

@endsection