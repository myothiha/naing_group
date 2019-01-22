@extends('layouts.front')

@section('content')

@include('layouts.menu')

<!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project Name</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 3D condo -->
    <section>
        <img src="images/3d-condo.jpg" alt="" class="img-fluid condo">
    </section>

    <div class="container my-3">

        <div class="row p-3">

            <div class="col-md-8">
                <h2 class="title my-5">Project Name</h2>
                <p class="my-3">
                    Open space, floor-to-ceiling windows. The best appliances. A great variety of light schemes and amazing functionality of each section. Style, quality. functionality
                </p>

                <ul class="project-list">
                    <li><span class="project-listinfo">Address</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Location</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Building</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Car Park</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Total Lift</span><span class="project-infotext">wewewewe</span></li>
                    <li><span class="project-listinfo">Facilities</span><span class="project-infotext">Gymnasium , Activities Room , Dancing Room , Yoga , Sauna Room , Jacuzzi , Function Room , Business Centre and Swimming Pool.</span>
                    </li>

                </ul>

                <h5 class="my-3">CEP Rooms</h5>

                <div class="collp">
                    <div id="accordion" class="accordion">
                        <div class="mb-0">
                            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                <a class="card-title">
                                                1st Floor
                                            </a>
                            </div>
                            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                                <a href="project-details.html">
                                    <div class="room sale">12A <span></span></div>
                                </a>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <a class="card-title">
                                            2nd Floor
                                            </a>
                            </div>
                            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">

                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sale">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>
                                <div class="room sold">12A <span></span></div>

                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <a class="card-title">
                                            3rd Floor
                                            </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sale">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                    <div class="room sold">12A <span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- panel-group -->
                </div>





                <h5 class="my-3">Facilities</h5>
                <div class="row">
                    <div class="d-fex facilities-icon">
                        <i class="fas fa-swimming-pool fa-3x"></i><br>
                        <span class="facilities-text">Swimming Pool</span>
                    </div>
                    <div class="d-fex facilities-icon">
                        <i class="fas fa-dumbbell fa-3x"></i><br>
                        <span class="facilities-text">Gymnasium</span>
                    </div>
                    <div class="d-fex facilities-icon">
                        <i class="fas fas fa-bath fa-3x"></i><br>
                        <span class="facilities-text">Sauna Room</span>
                    </div>
                    <div class="d-fex facilities-icon">
                        <i class="fab fa-yoast fa-3x"></i><br>
                        <span class="facilities-text">Yoga Room</span>
                    </div>
                    <div class="d-fex facilities-icon">
                        <i class="fas fa-shapes fa-3x"></i><br>
                        <span class="facilities-text">Play Ground</span>
                    </div>
                </div>


                <h5 class="my-3">Map</h5>
                <img src="images/map.jpg" alt="" class="img-fluid my-4">


            </div>

            <div class="col-md-4">
                <h2 class="title my-5">Search Properties</h2>
                <form>

                    <select class="form-control form-control mt-3 slect">
                        <option>Status</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                      </select>
                    <select class="form-control form-control my-2 slect">
                        <option>Type</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                      </select>
                    <select class="form-control form-control mb-2 slect">
                        <option>City</option>
                        <option>Yangon</option>
                        <option>Mandalay</option>
                      </select>

                    <!-- Range slider: -->
                    <div class="form-group range">
                        <label for="formControlRange">MMK(Lakh)- <span><output id="js-output"></output></span></label>
                        <input type="range" class="form-control-range" id="formControlRange" min="10" // default 0 max="1000" // default 100 step="10" // default 1 value="300" // default min + (max-min)/2 data-orientation="vertical" // default horizontal>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-3">Search Now</button>

                </form>

                <h2 class="title my-5">Featured Properties</h2>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>

                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>

                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5">
                        <img src="images/erc.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-7">
                        <h6>Featured Properties Name</h6>
                        <p>Yangon, No 123 , Maharbandoola Rd, Pabadan Township.</p>
                        <button type="button" class="btn btn-primary btn-block">Price on request</button>

                    </div>
                </div>

                <h2 class="title my-5">Our Guides</h2>
                <img src="images/giude.jpg" alt="" class="img-fluid my-3">

            </div>


        </div>

    </div>

@endsection