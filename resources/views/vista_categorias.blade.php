@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')
<style>
    #titulo_card_pequeña{
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        height: 45px;

    }
    #subtitulo_card_pequeña{
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 4;
    }

    .card_secundaria{
        height: 516px;

    }

    .caja_subtitulo_pequeñas{
        height: 100px;
        overflow: hidden;

    }
    .titulo_categoria{
        margin-top: 7em;
        border-radius: 0.7em;
    }

</style>
@endsection


@section('contenido')

    <section class="mt-5">
        <div class="container-fluid grey lighten-4">
            <div class="container">
                <div class="titulo_categoria  col-sm-12  grey lighten-2">
                    @if(isset($buscar))
                        <h3 class="p-3 text-uppercase font-weight-bold">{{$buscar}}</h3>

                    @else
                        <h3 class="p-3 text-uppercase font-weight-bold">{{$categoria_completa->nombre_categoria}}</h3>

                    @endif
                </div>
                <div class="row pt-3">
                    <div class="col-lg-12 col-12 mt-1 ">
                        <section class="section extra-margins pb-3 text-center text-lg-left">
                            @if(isset($posts))
                                @foreach($posts->chunk(3) as $postchunck)
                                    <div class="row text-center">
                                        @foreach($postchunck as $post)
                                            <div class="col-md-4 mb-4">
                                                <div class="card text-left card_secundaria ">
                                                    <div class="view overlay">
                                                        <img src="https://mdbootstrap.com/img/Photos/Others/images/14.jpg" class="card-img-top" alt="">
                                                        <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body mx-4 p-0">
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
                                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">leer más
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
