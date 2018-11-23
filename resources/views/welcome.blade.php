
@extends('templates.main')
@section('titulo_pagina', 'Home')

@section('estilos')
<style>
    section{
        padding: 0;
    }
    main{
        padding-top: 0;
    }

    .imagenes_carousel{
        max-height: 500px;
        width: 90%;
        padding-left: 10%;

    }
    .rgba-black-strong{
    rgba(0, 0, 0, 0.1)
    }

</style>
@endsection

@section('cabezera')
    <header >
        <!--<section>
            <div class="">
                <img src="http://mdbootstrap.com/img/Photos/Others/nature4.jpg" style="width: 100%;height: 500px">
            </div>
        </section>-->
                    <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half carousel_main" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-4" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-4" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img src="http://mdbootstrap.com/img/Photos/Others/nature4.jpg" class="img-fluid  imagenes_carousel"  alt="">
                                    <a href="#!">
                                        <div class="mask flex-center rgba-black-strong waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h4 class="h4-responsive">
                                            <a href="#!" class="white-text font-weight-bold">Your health</a>
                                        </h4>
                                        <p>
                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="view">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(128).jpg" class="img-fluid  imagenes_carousel" alt="">
                                    <a href="#!">
                                        <div class="mask flex-center rgba-black-strong waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h4 class="h4-responsive">
                                            <a href="#!" class="white-text font-weight-bold">News title</a>
                                        </h4>
                                        <p>
                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="view">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(133).jpg" class="img-fluid  imagenes_carousel"  alt="">
                                    <a href="#!">
                                        <div class="mask flex-center rgba-black-strong waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h4 class="h4-responsive">
                                            <a href="#!" class="white-text font-weight-bold">News title</a>
                                        </h4>
                                        <p>
                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-4" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-4" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
    </header>
    @endsection
@section('contenido')

    <section>
        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="section extra-margins pb-3 text-center text-lg-left">

                            <!--Grid row-->
                            <div class="row mb-4">

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(28).jpg" class="card-img-top" alt="">
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body mx-4">
                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>Lorem ipsum dolor sit amet</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="dark-grey-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                et quasi architecto beatae vitae dicta sunt explicabo.
                                            </p><p class="dark-grey-text mb-4"> Disrupt vero ea id fugiat, lo-fi lomo post-ironic irony kitsch Banksy. Tumblr
                                                kale stumptown beer elit seitan tote bag Banksy, elit small batch fregan
                                                sed.
                                            </p>
                                            <p></p>
                                            <p class="font-small font-weight-bold blue-grey-text mb-1">
                                                <i class="fa fa-clock-o"></i> 27/08/2017</p>
                                            <p class="font-small dark-grey-text mb-0 font-weight-bold">Anna Smith</p>
                                            <p class="text-right mb-0 text-uppercase dark-grey-text font-weight-bold">
                                                <a>read more
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->
                            <div class="row text-center">

                                <!--Grid column-->
                                <div class="col-md-6 mb-4">
                                    <!--Card-->
                                    <div class="card text-left">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body mx-4">
                                            <a href="" class="teal-text text-center text-uppercase font-small">
                                            </a><h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                    <strong>Travel</strong>
                                                </a><a class="dark-grey-text font-small"> - 14.09.2018</a>
                                            </h6>

                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>Title of the news</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="dark-grey-text mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam aperiam.</p>

                                            <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                                <a>read more
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-4">

                                    <!--Card-->
                                    <div class="card text-left">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" class="card-img-top" alt="">
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body mx-4">
                                            <a href="" class="teal-text text-center text-uppercase font-small">
                                            </a><h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                    <strong>Travel</strong>
                                                </a><a class="dark-grey-text font-small"> - 14.09.2018</a>
                                            </h6>

                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>Title of the news</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="dark-grey-text mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam aperiam.</p>

                                            <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                                <a>read more
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                            </div>



                        </section>
                        <!--Section: Blog v.3-->

                        <!--Pagination dark grey-->
                        <nav class="mb-5 pb-2">
                            <ul class="pagination pg-darkgrey flex-center">
                                <!--Arrow left-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active">
                                    <a class="page-link waves-effect waves-effect">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect">5</a>
                                </li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!--Pagination dark grey-->

                    </div>
                    <!--Main listing-->

                    <!--Sidebar-->
                    <div class="col-lg-3 col-12 mt-1">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/girl5.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Anna Doe</strong>
                                </h5>

                                <!--Description-->
                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                    <!--Facebook-->
                                    <li>
                                        <a class="fb-ic">
                                            <i class="fa fa-facebook"> </i>
                                        </a>
                                    </li>
                                    <!--Twitter-->
                                    <li>
                                        <a class="tw-ic">
                                            <i class="fa fa-twitter mx-3"> </i>
                                        </a>
                                    </li>
                                    <!--Google +-->
                                    <li>
                                        <a class="gplus-ic">
                                            <i class="fa fa-google-plus"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                        <!-- Section: Featured posts -->
                        <section class="section widget-content mt-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>POPULAR POSTS</strong>
                                    </p>

                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>
                            </div>
                        </section>
                        <!--/ Section: Featured posts -->


                        <!--Archive-->
                        <section class="archive mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARCHIVE</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-12 text-center">

                                            <!--List-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">August 2016</a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <!--List-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>

                            </div>
                            <!--/ Card -->

                        </section>
                        <!--Archive-->


                        <!--Popular posts-->
                        <section class="mb-4">

                            <!--Grid row-->
                            <div class="row mt-4">

                                <!--Grid column-->
                                <div class="col-md-12 col-lg-12">

                                    <!--Card-->
                                    <div class="card text-left mb-3">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen=""></iframe>
                                            </div>
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body mx-2">

                                            <!--Title-->
                                            <a>
                                                <h5 class="card-title text-center my-2">
                                                    <strong>Visit my YouTube channel!</strong>
                                                </h5>
                                            </a>

                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                        </section>
                        <!--Popular posts-->

                        <!-- Section: Categories -->
                        <section class="section mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>CATEGORIES</strong>
                                    </p>

                                    <ul class="list-group my-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Travel</p>
                                            </a>
                                            <span class="badge teal badge-pill font-small">4</span>
                                        </li>
                                     
                                    </ul>
                                </div>

                            </div>

                        </section>
                        <!-- Section: Categories -->

                        <!--Featured posts-->
                        <section class="mb-5">

                            <!--Grid row-->
                            <div class="row mt-4">
                                <!--Grid column-->
                                <div class="col-md-12">

                                    <!--Carousel Wrapper-->
                                    <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-4" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-4" data-slide-to="2" class=""></li>
                                        </ol>
                                        <!--Indicators-->

                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox">
                                            <!--First slide-->
                                            <div class="carousel-item active">
                                                <!--Mask color-->
                                                <div class="view">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(126).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-stylish-strong waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <!--Caption-->
                                                <div class="carousel-caption">
                                                    <div class="animated fadeInDown">
                                                        <h4 class="h4-responsive">
                                                            <a href="#!" class="white-text font-weight-bold">Your health</a>
                                                        </h4>
                                                        <p>
                                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--Caption-->
                                            </div>
                                            <!--First slide-->

                                            <!--Second slide-->
                                            <div class="carousel-item">
                                                <!--Mask color-->
                                                <div class="view">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(128).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-black-light waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <!--Caption-->
                                                <div class="carousel-caption">
                                                    <div class="animated fadeInDown">
                                                        <h4 class="h4-responsive">
                                                            <a href="#!" class="white-text font-weight-bold">News title</a>
                                                        </h4>
                                                        <p>
                                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--Caption-->
                                            </div>
                                            <!--Second slide-->

                                            <!--Third slide-->
                                            <div class="carousel-item">
                                                <!--Mask color-->
                                                <div class="view">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(133).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-black-light waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <!--Caption-->
                                                <div class="carousel-caption">
                                                    <div class="animated fadeInDown">
                                                        <h4 class="h4-responsive">
                                                            <a href="#!" class="white-text font-weight-bold">News title</a>
                                                        </h4>
                                                        <p>
                                                            <a href="#!" class="white-text">Lorem ipsum</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--Caption-->
                                            </div>
                                            <!--Third slide-->
                                        </div>
                                        <!--Slides-->

                                        <!--Controls-->
                                        <a class="carousel-control-prev" href="#carousel-example-4" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-4" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--.Controls-->
                                    </div>
                                    <!--Carousel Wrapper-->

                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->

                        </section>
                        <!--Featured posts-->

                    </div>
                    <!--Sidebar-->

                </div>
                <!--Blog-->

            </div>

        </div>
    </section>


@endsection
