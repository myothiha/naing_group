@extends('layouts.front')

@section('content')

@include('layouts.menu')

<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/csr">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Business Units</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">{{ $csr->title }}</h2>
        </div>

        <div class="">
            <img src="{{ $csr->featureimage }}" alt="" class="img-fluid" data-aos="fade-up">
            <p class="pt-4" data-aos="fade-down">
                {{ $csr->description }}
            </p>
        </div>
    </div>

    <!-- ACCOMMODATION -->
    <section class="gallery-block grid-gallery" data-aos="fade-up">
        <div class="container">
            <h6 class="" data-aos="fade-right">GALLERY Our Business Gallery</h6>

            <div class="row">
                @foreach($csr->csrimages as $image)
                <div class="col-md-3 col-6 item my-3">
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
                @foreach($csrs as $csr)
                <div class="col-md-4">
                    <a href="">
                        <img src="{{ $csr->image }}" alt="" class="img-fluid border border-secondary">
                        <div class="date-tiem">
                            <div class="date-ico"><i class="fas fa-calendar-alt"></i></div>
                            <div class="time"><span class="date">{{ $csr->created_at }}</span> <span class="text-white"></span></div>
                        </div>

                        <h6 class="text-white my-3">{{ $csr->title }}</h6>
                        <p class="text-white">{{ $csr->description }}</p>
                    </a>
                </div>

                @endforeach
                
            </div>
        </div>
    </section>

@endsection