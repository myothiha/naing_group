@extends('layouts.front')

@section('content')

@include('layouts.menu')

<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">FAQ</h2>
            </p>
        </div>

        <div class="collp">
            <div id="accordion" class="accordion">
                <div class="mb-0">
                    @foreach($faqs as $faq)
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                        <a class="card-title">
                                    {{ $faq->question }}
                                </a>
                    </div>
                    <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                        <p>{{ $faq->answer }}
                        </p>
                    </div>

                    @endforeach
                    
                </div>
            </div>

            <!-- panel-group -->
        </div>
    </div>

@endsection