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

        <div class="row">
        	@foreach($business as $data)
            <div class="col-md-4">
                <div class="card" data-aos="fade-up">
                    <a href="/businessdetail/{{ $data->id }}">
                        <img class="card-img-top" src="{{ $data->featureimage }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text">{!! substr(strip_tags($data->description), 0, 400) !!}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

            



        </div>

        <nav aria-label="Page navigation example">
            {{ $business->links() }}
        </nav>
    </div>

@endsection