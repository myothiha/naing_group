@extends('layouts.front')
@section('content')
@include('layouts.menu')


  <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Room Search </li>
                </ol>
            </nav>
        </div>
    </section>
    
    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <div class="col-md-12">
                <h2 class="title my-5"> Room Search </h2>
            </div>
    </div>
        
       
    
      
        <div class="row mt-3">
           
             <div class="col-md-8">
                <div class="row">
                     @foreach($rooms as $room)
                     @php $roomimage = $room->roomimage->first() ; @endphp
                       
                        <div class="col-md-4">
                            <figure class="" data-aos="fade-right">
                                <a href="/roomdetail/{{ $room->id }}">
                                   @if(empty($roomimage->image))
                                   <img src="/img/image1.jpg" class="img-fluid"
                                         alt="">
                                    @else
                                    <img src="{{ $roomimage->image }}" class="img-fluid"
                                         alt="">
                                    @endif
                                    <figcaption class="figure-caption">{{ $room->name }}</figcaption>
                                   
                                </a>
                            </figure>
                        </div>
                    @endforeach
                </div>
             
            </div>
             <div class="col-md-4 mb-5">
                <h2 class="title mb-5">Search Properties</h2>

                <form action="/search" method = "POST">
                    {{ csrf_field() }}
                    <select class="form-control form-control mt-3 slect" name = "status">
                        <option value = "">Status</option>
                        @foreach($status as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach
                      </select>
                    <select class="form-control form-control my-2 slect" name = "city">
                        <option value = ""> City </option>
                        @foreach($cities as $data )
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach
                      </select>
                    <select class="form-control form-control mb-2 slect" name = "type">
                        <option value = ""> Type </option>
                        @foreach($types as $data)
                            <option value="{{ $data->id }}"> {{ $data->name }}</option>
                        @endforeach                            
                      </select>

                    <!-- Range slider: -->
                  
                    <button type="submit" class="btn btn-primary btn-block mb-3">Search Now</button>

                </form>
                

                <h2 class="title my-5">Search Room </h2>
                <form class = "mt-2" action="/search-room" method = "POST">
                    {{ csrf_field() }}
                    <div class="form-group range">
                        <label for="price">MMK(Lakh)-</label>
                        <input type = "input" name = "price" id = "price">
                       
                    </div>
                     <div class="form-group range">
                        <label for="sqft"> Sqft &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp - </label>
                        <input type = "input" name = "sqft" id = "sqft">
                       
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Search Now</button>

                </form>
                
            </div>
        </div>
        
          

           
</div>
       


@endsection