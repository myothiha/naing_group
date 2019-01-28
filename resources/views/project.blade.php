@extends('layouts.front')

@section('content')

    @include('layouts.menu')

    <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Project</li>
                </ol>
            </nav>
        </div>
    </section>
    
    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <div class="col-md-12">
                <h2 class="title my-5">Our Project</h2>
            </div>
        </div>

        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-{{ $project->layout }}">
                    <figure class="" data-aos="fade-right">
                        <a href="{{ action('FrontController@projectdetail', $project->id) }}">
                            <img src="{{ $project->feature_image }}" class="img-fluid"
                                 alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">{{ $project->name }}</figcaption>
                        </a>
                    </figure>
                </div>
            @endforeach

            {{--<div class="col-md-4">
                <figure class="" data-aos="fade-right">
                    <a href="/projectdetail">
                        <img src="images/erc.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">ERC Project</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-8">
                <figure class="" data-aos="fade-left">
                    <a href="">
                        <img src="images/bridge.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-8">
                <figure class="" data-aos="fade-right">
                    <a href="">
                        <img src="images/hospital.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="" data-aos="fade-left">
                    <a href="">
                        <img src="images/kbz.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">ERC Project</figcaption>
                    </a>
                </figure>

            </div>
            <div class="col-md-4">
                <figure class="" data-aos="fade-left">
                    <a href="">
                        <img src="images/merchant.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">ERC Project</figcaption>
                    </a>
                </figure>

            </div>
            <div class="col-md-8">
                <figure class="" data-aos="fade-right">
                    <a href="">
                        <img src="images/gv.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </a>
                </figure>
            </div>
            <div class="col-md-12">
                <figure class="" data-aos="fade-down">
                    <a href="">
                        <img src="images/sule-tower.jpg" class="img-fluid"
                             alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                    </a>
                </figure>
            </div>--}}

        </div>

    </div>

@endsection
