@extends('layouts.front')

@section('content')

@include('layouts.menu')

  <!-- Breadcrumb Bar -->
    <section class="bg-gray">
        <div class="container pt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our People</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container my-3">
        <div class="row p-3" data-aos="fade-left">
            <div class="col-md-12">
                <h2 class="page-title my-5">Our People</h2>
                <p class="my-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book has survived.
                </p>
            </div>
        </div>
    </div>

    <section class="mission-section py-4">
        <div class="container py-4">

            <div class="row d-flex justify-content-center">
                <h4 class="">Founder and Executive Chairman's</h4>
            </div>

            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-3" data-toggle="modal" data-target="#founder">
                    <div class="card people" data-aos="fade-up">
                        <img class="card-img-top person" src="images/person.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Richard Wagner</h5>
                            <h6 class="card-postion">Founder</h6>
                            <div class="prson-social my-2">
                                <i class="fab fa-facebook-f mx-2"></i>
                                <i class="fab fa-google-plus-g mx-2"></i>
                                <i class="fab fa-twitter mx-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="founder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title prson-title" id="exampleModalLongTitle">NAME TITLE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img class="img-fluid prson-img" src="images/person.jpg" alt="Card image cap">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <h5 class="prson-name">Name</h5>
                                        <p class="prson-postion">Founder</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, est maiores debitis sint quia tempora voluptatibus? Exercitationem libero distinctio laborum excepturi porro consequuntur, eum nam inventore,
                                            natus similique sapiente voluptas!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <p class="text-center text-white">©2018 by Naing Group</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Our Honorable Person -->
            <div class="row d-flex justify-content-center">
                <h4 class="">Our Honorable Person</h4>
            </div>

            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-3" data-toggle="modal" data-target="#honorable1">
                    <div class="card people" data-aos="fade-up">
                        <img class="card-img-top person" src="images/person.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Richard Wagner</h5>
                            <h6 class="card-postion">honorable</h6>
                            <div class="prson-social my-2">
                                <i class="fab fa-facebook-f mx-2"></i>
                                <i class="fab fa-google-plus-g mx-2"></i>
                                <i class="fab fa-twitter mx-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="honorable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title prson-title" id="exampleModalLongTitle">NAME TITLE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img class="img-fluid prson-img" src="images/person.jpg" alt="Card image cap">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <h5 class="prson-name">Name</h5>
                                        <p class="prson-postion">Our Honorable Person 1</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, est maiores debitis sint quia tempora voluptatibus? Exercitationem libero distinctio laborum excepturi porro consequuntur, eum nam inventore,
                                            natus similique sapiente voluptas!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <p class="text-center text-white">©2018 by Naing Group</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" data-toggle="modal" data-target="#honorable2">
                    <div class="card people" data-aos="fade-up">
                        <img class="card-img-top person" src="images/person.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">Richard Wagner</h5>
                            <h6 class="card-postion">honorable</h6>
                            <div class="prson-social my-2">
                                <i class="fab fa-facebook-f mx-2"></i>
                                <i class="fab fa-google-plus-g mx-2"></i>
                                <i class="fab fa-twitter mx-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="honorable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title prson-title" id="exampleModalLongTitle">NAME TITLE</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img class="img-fluid prson-img" src="images/person.jpg" alt="Card image cap">
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <h5 class="prson-name">Name</h5>
                                        <p class="prson-postion">Our Honorable Person 2</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, est maiores debitis sint quia tempora voluptatibus? Exercitationem libero distinctio laborum excepturi porro consequuntur, eum nam inventore,
                                            natus similique sapiente voluptas!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <p class="text-center text-white">©2018 by Naing Group</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <h4 class="">ORGANIZATION REPRESENTATIVES*</h4>
        </div>

        <div class="row my-4">
            <div class="col-md-3" data-toggle="modal" data-target="#preson1">
                <div class="card bg-prson people" data-aos="fade-up">
                    <img class="card-img-top person" src="images/person.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Richard Wagner</h5>
                        <h6 class="card-postion">CREATIVE DIRECTOR</h6>
                        <div class="prson-social my-2">
                            <i class="fab fa-facebook-f mx-2"></i>
                            <i class="fab fa-google-plus-g mx-2"></i>
                            <i class="fab fa-twitter mx-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="preson1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title prson-title" id="exampleModalLongTitle">NAME TITLE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img class="img-fluid prson-img" src="images/person.jpg" alt="Card image cap">
                                </div>
                                <div class="col-md-7 col-sm-7">
                                    <h5 class="prson-name">Name</h5>
                                    <p class="prson-postion">Founder and Executive Chairman's</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, est maiores debitis sint quia tempora voluptatibus? Exercitationem libero distinctio laborum excepturi porro consequuntur, eum nam inventore, natus
                                        similique sapiente voluptas!</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <p class="text-center text-white">©2018 by Naing Group</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section>
        <div class="container-fluid joyus">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 mission-img">
                    <img src="images/about-pic.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 p-5">
                    <div class="my-2">
                        <h4 class="joy-title">OUR MISSION</h4>
                        <p class="my-3 text-white">Company was started by its Executive Patron, U Kyaw Naing Oo, who began as an independent contractor at the age of twenty in 1991. Learning family values from his mother and father, Haji U Win Naing and Hajima Daw Hla Hla Htway,
                            U Kyaw Naing Oo has made them a central part of the company’s mission. As a result of the Naing Brothers’ hard work, the business progress rapidly. On March 2,1996, they established a construction company known as the Naing
                            Group after the names of the principals and built the business into the conglomerate known today as the Naing Group Holding. As a result of completing more than two hundred buildings in just over eleven years, they qualified
                            as a Development Company in 2003.
                        </p>

                        <h6 class="joyfounder">Founder & Moderator</h6>
                        <p class="my-3 text-white">Company was started by its Executive Patron, U Kyaw Naing Oo, who began as an independent contractor at the age of twenty in 1991. Learning family values from his mother and father, Haji U Win Naing and Hajima Daw Hla Hla Htway,
                            U Kyaw Naing Oo has made them a central part of the company’s mission. As a result of the Naing Brothers’ hard work, the business progress rapidly. On March 2,1996, they established a construction company known as the Naing
                            Group after the names of the principals and built the business into the conglomerate known today as the Naing Group Holding. As a result of completing more than two hundred buildings in just over eleven years, they qualified
                            as a Development Company in 2003.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection