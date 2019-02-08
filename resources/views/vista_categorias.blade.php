@extends('templates.main')

@if(isset($buscar))
    @section('titulo_pagina', $buscar)
@else
    @section('titulo_pagina', $categoria_completa->nombre_categoria)
@endif


@section('estilos')
@endsection


@section('contenido')

    <section class="mt-5">
        <div class="container-fluid grey lighten-4">
            <div class="container">
                <div class="titulo_categoria  col-sm-12  grey lighten-2 ">
                    @if(isset($buscar))
                        <h3 class="p-3 text-uppercase font-weight-bold">{{$buscar}}</h3>

                    @else
                        <h3 class="p-3 text-uppercase font-weight-bold">{{$categoria_completa->nombre_categoria}}</h3>

                    @endif
                </div>
                @if($dispositivo == 'movil')
                            @if(isset($posts))
                                <hr>
                                @foreach($posts as $post)
                                    <div class="row p-3 pt-3 pb-3 m-0">
                                        <div class="col-6 ">
                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">

                                                <h5 title="{{$post->titulo_post}}" class="card-title titulo_post_movil">
                                                    <strong>{{$post->titulo_post}}</strong>
                                                </h5>

                                                <p class="font-small dark-grey-text mb-0 font-weight-bold">{{$post->user->nombre." ".$post->user->apellidos}}</p>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">

                                                <img src="{{$post->imagen_principal}}"
                                                     class="w-100 imagen_card_movil" alt="">
                                            </a>
                                        </div>

                                    </div>
                                    <hr>
                                @endforeach
                            @endif

                    @else
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
                                                        <img src="{{$post->imagen_principal}}" class="card-img-top imagen_post_secundario" alt="">
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
                    @endif
            </div>
        </div>
    </section>
@endsection
