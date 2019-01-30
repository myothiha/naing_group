@extends('layouts.front')

@section('content')

@include('layouts.menu')

 <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CSR</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <div class="col-md-12">
                <h2 class="page-title my-5">CSR</h2>
                <p class="my-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book has survived.
                </p>
            </div>
        </div>

        <div class="row">
            @if(empty($csrs))
                <h3> There is no Data </h3>
            @else
            @foreach($csrs as $csr)
            <div class="col-lg-3 col-md-6 col-6">
                <figure class="figure">
                    <a href="/csrdetail/{{ $csr->id }}">

                        <img src="{{ $csr->featureimage }}" class="img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
                        <figcaption class="figure-caption">{!! substr(strip_tags($csr->description), 0, 400) !!}</figcaption>
                    </a>

                </figure>

            </div>
            @endforeach
            @endif

            
        </div>

        <div class="row">
            @if(!empty($csrs))
            {{ $csrs->links() }}
            @endif
        </div>


    </div>

@endsection