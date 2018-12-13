@extends('templates.main')
@section('titulo_pagina', $post[0]->titulo_post)

@section('estilos')
    {{--}}<meta name="twitter:title" 				content="Game of Thrones Season 6: Tease"/>
    <meta name="twitter:description" 		content="The first thing Game Of Thrones released to tease its upcoming sixth season was a poster featuring Jon Snow."/>
    <meta name="twitter:image" 				content="http://mahcode.com/share_article/teaser-jon-snow.jpg"/>
    <meta name="twitter:site" 				content="@itsmahcode"/>
    <meta name="twitter:creator" 			content="@itsmahcode"/>
    <meta name="twitter:via" 				content="itsmahcode"/>
    <meta name="twitter:card" 				content="photo"/>
    <meta name="twitter:url" 				content="http://mahcode.com/share_article/"/>{{--}}


   <meta name="description" 				content="{{$post[0]->subtitulo}}">
   <meta name="author" 					content="Tecnoforyou">
   <meta property="og:locale" 				content="es_Es"/>
   <meta property="og:type" 				content="article"/>
   <meta property="og:title" 				content="{{$post[0]->titulo}}"/>
   <meta property="og:description" 		content="{{$post[0]->subtitulo}}"/>
   <meta property="og:url" 				content="{{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}"/>
   <meta property="og:site_name" 			content="Tecnoforyou.com"/>
   <meta property="article:publisher" 		content="https://www.facebook.com/Mahcode-849841581779986"/>
   <meta property="article:published_time" content="{{$post[0]->created_at}}"/>
   <meta property="og:image" 				content="{{$post[0]->imagen_principal}}"/>

   <style>
    .comments-list .avatar, .reply-form .avatar {
        max-width: 100px;
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
        .nombre_comentario{
            margin-top: -1.6em;
        }
        .imagen_principal_noticia{
            width: 100%;
            height: 658px;
        }
    }
    @media (max-width: 992px) {
        .imagen_principal_noticia{
            height: 250px;
            width: 100%;

        }

    }
    .imagenes_destacadas{
        height: 177px;
    }
    .btn-floating i {
        font-size: 1.25rem;
        line-height: 47px;
    }
    .btn-floating {
        -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
        box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
        width: 47px;
        height: 47px;
        position: relative;
        z-index: 1;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        margin: 10px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        padding: 0;
        cursor: pointer;
        text-align: center;
    }

    .btn-floating:hover {
        -webkit-box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
        box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
    }

</style>
@endsection


@section('contenido')

    <section>
        <div >
            <img src="{{$post[0]->imagen_principal}}" class="imagen_principal_noticia">
        </div>
    </section>
    <div class="container-fluid mb-5">
        <div class="row cuerpo_noticia" >

            <!--Grid column-->
            <div class="col-md-12 px-lg-5">
                <!--Card-->
                <div class="card pb-5 mx-md-3">
                    <div class="card-body">

                        <div class="container">

                            <!--Section heading-->

                            <nav aria-label="breadcrumb "  class="row justify-content-end">
                                <ol class="breadcrumb white">
                                    <li class="breadcrumb-item"><a class="black-text" href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a class="black-text" href="{{route('categoria',$post[0]->categoria->nombre_categoria)}}">{{$post[0]->categoria->nombre_categoria}}</a></li>
                                </ol>
                            </nav>
                            <h1 class="text-center h1">
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
                                    <div class="botones_compartir row justify-content-center">
                                    <a class=" btn-fb btn-floating"><i class="fa fa-facebook"></i></a>
                                    <a class=" btn-tw btn-floating"><i class="fa fa-twitter"></i></a>
                                    </div>

                                    <hr class="mt-5">

                                    <!--Comments-->
                                    <section>

                                        <!--Main wrapper-->
                                        <div class="comments-list text-center text-md-left">
                                            <div class="text-center my-5">
                                                <h3 class="font-weight-bold">Comentarios
                                                    <span class="badge indigo">{{count($comentarios)}}</span>
                                                </h3>
                                            </div>
                                            <!--First row-->
                                            <div id="caja_comentarios">
                                            @foreach($comentarios as $comentario)
                                            <div class="row mb-5 ">

                                                <div class="col-sm-12 card">
                                                    <div class="ml-3 row mt-2">
                                                    <a>
                                                        <h5 class="user-name font-weight-bold">{{$comentario->nombre_usuario}}</h5>
                                                    </a>
                                                    <div class="card-data ml-3 mt-1">
                                                        <ul class="list-unstyled">
                                                            <li class="comment-date font-small">
                                                                <i class="fa fa-clock-o"></i> {{$comentario->fecha}} {{$comentario->hora}}</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <p class="dark-grey-text article">{{$comentario->comentario }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                            <!--/.First row-->

                                        </div>
                                        <!--/.Main wrapper-->

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                                        <h3 class="font-weight-bold text-center my-5">Dejar Comentario</h3>

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group basic-textarea rounded-corners shadow-textarea">
                                                    <textarea class="form-control"  id="comentario" name="comentario" rows="5" placeholder="Escribe algo aqui" onkeyup="desactivar_boton()"></textarea>
                                                </div>

                                            </div>
                                            <div class=" col-sm-4 mb-4 nombre_comentario">
                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon8"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <input type="text" onkeyup="desactivar_boton()"  name="nombre_usuario" id="nombre_usuario" class="form-control mt-0 black-border rgba-white-strong" placeholder="Introduce tu nombre..." aria-describedby="basic-addon9" >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="text-right">
                                                <input type="button" id="publicar_comentario" value="Publicar" disabled onclick="enviar_comentario({{$post[0]->id}})" class="btn btn-grey btn-sm waves-effect waves-light">
                                            </div>

                                        </div>

                                    </section>

                                    <section class="text-left mt-4 hidden-sm">

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
                                                                            <img src="{{$noticia->imagen_principal}}" class="card-img-top imagenes_destacadas" alt="sample image">
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
@section('scripts')
    <script>
        // enviar comentario

         function desactivar_boton() {

            if ($('#comentario').val()!=='' && $('#nombre_usuario').val()!=='' ) {

                $('#publicar_comentario').prop("disabled", false);
            }else{
                $('#publicar_comentario').prop("disabled", true);

            }
        }
        function enviar_comentario(id){
            var route = "{{route('escribir_comentario')}}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                dataType: "json",
                data: {comentario: $('#comentario').val(),nombre_usuario:$('#nombre_usuario').val(),post_id:id},
                url: route,
                success: function (data) {
                    if (data.respuesta ===true) {

                        $('#comentario').val('');
                        $('#nombre_usuario').val('');

                        $('#caja_comentarios').prepend("<div class='row mb-5 '>  <div class='col-sm-12 card'><div class='ml-3 row mt-2'>" +
                            "<a><h5 class='user-name font-weight-bold'>"+data.comentario['nombre_usuario']+"</h5></a>" +
                            "<div class='card-data ml-3 mt-1'>" +
                            "<ul class='list-unstyled'>" +
                            "<li class='comment-date font-small'>" +
                            "<i class='fa fa-clock-o'></i> "+data.comentario['fecha']+" "+data.comentario['hora']+
                            "</li>" +
                            "</ul>" +
                            "</div>" +
                            "</div>" +
                            "<p class='dark-grey-text article'>"+data.comentario['comentario']+"</p>" +
                            "</div>" +
                            "</div>")

                        $('#publicar_comentario').prop("disabled", true);

                        alert('comentario publicado correctamente')

                    }else{
                        alert('error al publicar comentario')
                    }
                }
            })
        }
        $('.btn-fb ').click(function(){
            open_window('http://www.facebook.com/sharer/sharer.php?u={{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}');
        });
        $('.btn-tw').click(function(){
            open_window('http://twitter.com/share?text={{$post[0]->titulo_post}}&url={{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}');
        });
        function open_window(url, name){
            window.open(url, name);
        }
    </script>
    @endsection