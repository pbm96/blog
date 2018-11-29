
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

    .cuerpo_card{
        overflow: hidden;
        text-overflow: ellipsis;
        padding-bottom: 1em;
        height:110px ;
        white-space: nowrap;

    }
    .card_secundaria{
        height: 516px;

    }

    .caja_subtitulo_pequeñas{
        height: 100px;
        overflow: hidden;

    }
    .titulo_caja_pequeña{

        overflow: hidden;


    }
    #titulo_card_pequeña{
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
    }
    #subtitulo_card_pequeña{
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 4;
    }
    .titulo_card_principal{
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
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
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">
                        <section class="section extra-margins pb-3 text-center text-lg-left">
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="view overlay">
                                            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(28).jpg" class="card-img-top" alt="">
                                            <a href="{{route('vista_post',$ultimo_post->slug)}}">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <div class="card-body principal_card mx-4">
                                            <h4 title="{{$ultimo_post->titulo_post}}" class="card-title titulo_card_principal ">
                                                <strong>{{$ultimo_post->titulo_post}}</strong>
                                            </h4>
                                            <hr>
                                            <div class="dark-grey-text mb-3 cuerpo_card">{!!$ultimo_post->subtitulo_post!!}
                                            </div>
                                            <p class="font-small font-weight-bold blue-grey-text mb-1 ">
                                                <i class="fa fa-clock-o"></i> {{$ultimo_post->fecha}}</p>
                                            <p class="font-small dark-grey-text mb-0 font-weight-bold">{{$ultimo_post->user->nombre." ".$ultimo_post->user->apellidos}}</p>
                                            <p class="text-right mb-0 text-uppercase dark-grey-text font-weight-bold">
                                                <a href="{{route('vista_post',$ultimo_post->slug)}}">leer más
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach($posts->chunk(2) as $postchunck)
                            <div class="row text-center">
                                @foreach($postchunck as $post)
                                <div class="col-md-6 mb-4">
                                    <div class="card text-left card_secundaria ">
                                        <div class="view overlay">
                                            <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                            <a href="{{route('vista_post',$post->slug)}}">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <div class="card-body mx-4">
                                            <a href="" class="teal-text text-center text-uppercase font-small">
                                            </a><h6 class="mb-3 mt-3"><a href="" class="teal-text text-center text-uppercase font-small">
                                                    <strong>{{$post->categoria->nombre_categoria}}</strong>
                                                </a><a class="dark-grey-text font-small"> - {{$post->fecha}}</a>
                                            </h6>
                                            <div class=" titulo_caja_pequeña">
                                            <h5 title="{{$post->titulo_post}}" id="titulo_card_pequeña" >
                                                <strong>{{$post->titulo_post}}</strong>
                                            </h5>
                                            </div>
                                            <hr>
                                            <div class="caja_subtitulo_pequeñas">
                                            <p class="dark-grey-text mb-4 " id="subtitulo_card_pequeña">{{$post->subtitulo_post}}</p>
                                            </div>
                                            <p class="text-right mb-0 text-uppercase font-small spacing font-weight-bold">
                                                <a href="{{route('vista_post',$post->slug)}}">leer más
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                                 @endforeach
                        </section>
                        <div class="row justify-content-around">
                            <div class="">{{ $posts->render() }}</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 mt-1">
                        <div class="card">
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/girl5.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Pablo Bonillo</strong>
                                </h5>

                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                    <li>
                                        <a class="fb-ic">
                                            <i class="fa fa-facebook"> </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tw-ic">
                                            <i class="fa fa-twitter mx-3"> </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gplus-ic">
                                            <i class="fa fa-google-plus"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <section class="section widget-content mt-5">
                            <div class="card card-body pb-0">
                                <div class="single-post">
                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>POPULAR POSTS</strong>
                                    </p>
                                    <div class="row mb-4">
                                        <div class="col-5">
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                </a>
                                            </div>
                                        </div>
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
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="archive mb-5">
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARCHIVE</strong>
                                    </p>
                                    <div class="row mb-4">
                                        <div class="col-md-12 text-center">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">August 2016</a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="mb-4">
                            <div class="row mt-4">
                                <div class="col-md-12 col-lg-12">
                                    <div class="card text-left mb-3">
                                        <div class="view overlay">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen=""></iframe>
                                            </div>
                                            <a>
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <div class="card-body mx-2">
                                            <a>
                                                <h5 class="card-title text-center my-2">
                                                    <strong>Visit my YouTube channel!</strong>
                                                </h5>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section mb-5">
                            <div class="card card-body pb-0">
                                <div class="single-post">
                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>CATEGORIES</strong>
                                    </p>
                                    <ul class="list-group my-4">
                                        @foreach($categorias as $categoria)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <a class="">
                                                    <p class="mb-0">{{$categoria->nombre_categoria}}</p>
                                                </a>
                                                <span class="badge teal badge-pill font-small"> {{empty($categoria->count)?0:$categoria->count}}</span>
                                            </li>
                                        @endforeach
                                     
                                    </ul>
                                </div>

                            </div>

                        </section>
                        <section class="mb-5">

                            <div class="row mt-4">
                                <div class="col-md-12">

                                    <div id="carousel-example-4" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-4" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-4" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-4" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="view">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(126).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-stylish-strong waves-effect waves-light"></div>
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
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(128).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-black-light waves-effect waves-light"></div>
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
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img%20(133).jpg" class="img-fluid" alt="">
                                                    <a href="#!">
                                                        <div class="mask flex-center rgba-black-light waves-effect waves-light"></div>
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

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')

@endsection