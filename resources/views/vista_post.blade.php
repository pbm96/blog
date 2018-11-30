@extends('templates.main')
@section('titulo_pagina', $post[0]->titulo_post)

@section('estilos')
<style>
    .comments-list .avatar, .reply-form .avatar {
        max-width: 100px;
    }
    .btn-gplus {
        background-color: #dd4b39!important;
        color: #fff!important;
    }
    .btn-tw {
        background-color: #55acee!important;
        color: #fff!important;
    }
    .btn-fb {
        background-color: #3b5998!important;
        color: #fff!important;
    }
    .carousel-multi-item {
        margin-bottom: 5rem;
    }
    .titulo_card_pequeña{
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        height: 56px;
    }


    .carousel-multi-item .carousel-indicators li {
        height: 1.25rem;
        width: 1.25rem;
        max-width: 1.25rem;
        background-color: #4285f4;
        margin-bottom: -3rem;
    }

    .carousel-multi-item .carousel-indicators .active {
        height: 1.56rem;
        width: 1.56rem;
        max-width: 1.56rem;
        background-color: #4285f4;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
    @media (min-width: 992px) {
        .cuerpo_noticia {
            margin-top: -100px;
        }
    }
    @media (max-width: 992px) {
        .imagen_principal_noticia{
            height: 250px;
        }
    }
    .imagen_principal_noticia{
        width: 100%;
    }

</style>
@endsection


@section('contenido')

    <section>
        <div >
            <img src="http://mdbootstrap.com/img/Photos/Others/nature4.jpg" class="imagen_principal_noticia">
        </div>
    </section>
    <div class="container-fluid mb-5">

        <!--Grid row-->
        <div class="row cuerpo_noticia" >

            <!--Grid column-->
            <div class="col-md-12 px-lg-5">
                <!--Card-->
                <div class="card pb-5 mx-md-3">
                    <div class="card-body">

                        <div class="container">

                            <!--Section heading-->
                            <h1 class="text-center h1 pt-4 mb-3">
                                <strong>{{$post[0]->titulo_post}}</strong>
                            </h1>

                            <div class="row">
                                <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                    <p class="font-small dark-grey-text mb-1">
                                        <strong>Autor</strong> {{$post[0]->user->nombre}} {{$post[0]->user->apellidos}}</p>
                                    <p class="font-small grey-text mb-0 ml-3">
                                        <i class="fa fa-clock-o dark-grey-text"></i> {{$post[0]->fecha}} a las {{$post[0]->hora}}</p>
                                </div>
                            </div>

                            <!--Grid row-->
                            <div class="row pt-lg-5 pt-3">

                                <!--Grid column-->
                                <div class="col-md-12 col-xl-12">

                                    {!! $post[0]->descripcion_post !!}
                                    <hr class="mt-5">

                                    <!--Comments-->
                                    <section>

                                        <!--Main wrapper-->
                                        <div class="comments-list text-center text-md-left">
                                            <div class="text-center my-5">
                                                <h3 class="font-weight-bold">Comments
                                                    <span class="badge indigo">3</span>
                                                </h3>
                                            </div>
                                            <!--First row-->
                                            <div class="row mb-5">
                                                <!--Image column-->
                                                <div class="col-sm-2 col-12 mb-3">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                </div>
                                                <!--/.Image column-->

                                                <!--Content column-->
                                                <div class="col-sm-10 col-12">
                                                    <a>
                                                        <h5 class="user-name font-weight-bold">John Doe</h5>
                                                    </a>
                                                    <div class="card-data">
                                                        <ul class="list-unstyled">
                                                            <li class="comment-date font-small">
                                                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        </ul>
                                                    </div>
                                                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                                </div>
                                                <!--/.Content column-->
                                            </div>
                                            <!--/.First row-->

                                        </div>
                                        <!--/.Main wrapper-->

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <!--Section: Leave a reply (Not Logged In User)-->
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                                        <h3 class="font-weight-bold text-center my-5">Leave a reply</h3>

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon8">1</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Name" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon9">2</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Email" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon10">3</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Website" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->

                                        <!--Grid row-->
                                        <div class="row">

                                            <div class="col-12 mt-1">
                                                <div class="form-group basic-textarea rounded-corners shadow-textarea">

                                                    <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
                                                </div>

                                                <div class="text-right">
                                                    <button class="btn btn-grey btn-sm waves-effect waves-light">Submit</button>
                                                </div>

                                            </div>

                                        </div>
                                        <!--Grid row-->

                                    </section>
                                    <!--/Section: Leave a reply (Not Logged In User)-->

                                    <!--Posts-->
                                    <section class="text-left mt-4">

                                        <h4 class="font-weight-bold mt-5 mb-5 text-center">
                                            <strong>Últimas noticias</strong>
                                        </h4>

                                        <!--Carousel Wrapper-->
                                        <div id="multi-item-example" class="carousel slide carousel-multi-item mx-1" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                @foreach($ultimas_noticias->chunk(3) as $key => $noticiasChunk)
                                                <li data-target="#multi-item-example" data-slide-to="{{$key}}" class="{{$loop->first?'active':''}}"></li>
                                                    @endforeach
                                            </ol>

                                            <div class="carousel-inner" role="listbox">
                                                @foreach($ultimas_noticias->chunk(3) as $noticiasChunk)
                                                    <div class="carousel-item {{$loop->first?'active':''}}">
                                                        <div class="row mb-4 mx-1">
                                                            @foreach($noticiasChunk as $noticia)
                                                                <div class="col-lg-4 my-3 ">
                                                                    <div class="card">
                                                                        <div class="view overlay">
                                                                            <img src="http://mdbootstrap.com/img/Photos/Others/img (40).jpg" class="card-img-top" alt="sample image">
                                                                            <a href="{{route('vista_post',[$noticia->categoria->nombre_categoria,$noticia->slug])}}">
                                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <h4 class="card-title titulo_card_pequeña" title="{{$noticia->titulo_post}}" >
                                                                                <strong>{{$noticia->titulo_post}}</strong>
                                                                            </h4>
                                                                            <hr>
                                                                            <p></p>
                                                                            <p class="font-small font-weight-bold dark-grey-text mb-1">
                                                                                <i class="fa fa-clock-o"></i> {{$noticia->fecha}}</p>
                                                                            <p class="font-small grey-text mb-0">{{$noticia->user->nombre}} {{$noticia->user->apellidos}}</p>
                                                                            <p class="text-right mb-0 font-small font-weight-bold">
                                                                                <a href="{{route('vista_post',[$noticia->categoria->nombre_categoria,$noticia->slug])}}">leer más
                                                                                    <i class="fa fa-angle-right"></i>
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection