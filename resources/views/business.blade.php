@extends('layouts.front')

@section('content')

@include('layouts.menu')
 <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <h2 class="title">Our Business Units </h2>
        </div>
        <div class="container text-center my-3">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    @foreach($business as $key => $data)
                    <div class="carousel-item row no-gutters  {{ $key == 0 ? "active" : "" }}">

                        <div class="row">
                            @foreach($data as $data1)
                           
                            <div class="col-md-4 ">
                                <div class="card " data-aos="fade-up">
                                   <a href="/businessdetail/{{ $data1->id }}">
                                    <img class="card-img-top " src="{{ $data1->featureimage }}" alt="Card image cap ">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{ $data1->title }} </h5>
                                        <p class="card-text"> {{ $data1->description }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>                        
                    </div>   
                    @endforeach
                                
                </div>
                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>



</div>

@endsection