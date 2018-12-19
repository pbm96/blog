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


    <meta name="description" content="{{$post[0]->subtitulo}}">
    <meta name="author" content="Tecnoforyou">
    <meta property="og:locale" content="es_Es"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$post[0]->titulo}}"/>
    <meta property="og:description" content="{{$post[0]->subtitulo}}"/>
    <meta property="og:url" content="{{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}"/>
    <meta property="og:site_name" content="Tecnoforyou.com"/>
    <meta property="article:publisher" content="https://www.facebook.com/Mahcode-849841581779986"/>
    <meta property="article:published_time" content="{{$post[0]->created_at}}"/>
    <meta property="og:image" content="{{$post[0]->imagen_principal}}"/>

    <style>
        .comments-list .avatar, .reply-form .avatar {
            max-width: 100px;
        }

        .btn-tw {
            background-color: #55acee !important;
            color: #fff !important;
        }

        .btn-fb {
            background-color: #3b5998 !important;
            color: #fff !important;
        }

        .carousel-multi-item {
            margin-bottom: 5rem;
        }

        .titulo_card_pequeña {
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

            .nombre_comentario {
                margin-top: -1.6em;
            }

            .imagen_principal_noticia {
                width: 100%;
                height: 658px;
            }
        }

        @media (max-width: 992px) {
            .imagen_principal_noticia {
                height: 250px;
                width: 100%;

            }

        }

        .imagenes_destacadas {
            height: 177px;
        }

        .btn-floating i {
            font-size: 1.25rem;
            line-height: 47px;
        }

        .btn-floating {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
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
            -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
        }

        .comentarios_ocultos {
            display: none;
        }

        .btn-plus {
            background-color: #4285f4;
        }

        .btn-publicar:hover {
            color: #FFFFFF !important;

        }


    </style>
@endsection


@section('contenido')

    <section>
        <div>
            <img src="{{$post[0]->imagen_principal}}" class="imagen_principal_noticia">
        </div>
    </section>
    <div class="container-fluid mb-5">
        <div class="row cuerpo_noticia">

            <!--Grid column-->
            <div class="col-md-12 px-lg-5">
                <!--Card-->
                <div class="card pb-5 mx-md-3">
                    <div class="card-body">

                        <div class="container">

                            <!--Section heading-->

                            <nav aria-label="breadcrumb " class="row justify-content-sm-start">
                                <ol class="breadcrumb white">
                                    <li class="breadcrumb-item"><a class="black-text" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a class="black-text"
                                                                   href="{{route('categoria',$post[0]->categoria->nombre_categoria)}}">{{$post[0]->categoria->nombre_categoria}}</a>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-center h1">
                                <strong>{{$post[0]->titulo_post}}</strong>
                            </h1>
                            <div class="row">
                                <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                    <p class="font-small dark-grey-text mb-1">
                                        <strong>Autor</strong> {{$post[0]->user->nombre}} {{$post[0]->user->apellidos}}
                                    </p>
                                    <p class="font-small grey-text mb-0 ml-3">
                                        <i class="fa fa-clock-o dark-grey-text"></i> {{$post[0]->fecha}} a
                                        las {{$post[0]->hora}}</p>
                                </div>
                            </div>
                            <div class="botones_compartir row justify-content-center">
                                <a class=" btn-fb btn-floating"><i class="fa fa-facebook"></i></a>
                                <a class=" btn-tw btn-floating"><i class="fa fa-twitter"></i></a>
                            </div>
                            <!--Grid row-->
                            <div class="row pt-lg-5 pt-3">

                                <!--Grid column-->
                                <div class="col-md-12 col-xl-12">

                                    {!! $post[0]->descripcion_post !!}


                                    <hr class="mt-5" id="vuelta_comentarios">

                                    <!--Comments-->
                                    <section>

                                        <!--Main wrapper-->
                                        <div class="comments-list text-center text-md-left">
                                            <div class="text-center my-5">
                                                <h3 class="font-weight-bold">Comentarios
                                                    <span class=" badge btn-plus count_comentarios">{{count($comentarios)}}</span>
                                                </h3>
                                            </div>

                                            <!--First row-->
                                            <div id="caja_comentarios">
                                                @foreach($comentarios as $key =>$comentario)

                                                    <div class="row mb-5 {{$key >=4?'comentarios_ocultos':''}} "
                                                         id="comentario{{$comentario->id}}">
                                                        <div class="col-sm-8 card offset-sm-2 ">
                                                            <div class="ml-1 row mt-2">
                                                                <a>
                                                                    <h5 class="user-name font-weight-bold">{{$comentario->user->nombre}} {{$comentario->user->apellidos}} </h5>
                                                                </a>
                                                                <div class="card-data ml-3 mt-1">
                                                                    <ul class="list-unstyled">
                                                                        <li class="comment-date font-small">
                                                                            <i class="fa fa-clock-o"></i> {{$comentario->fecha}}  {{$comentario->hora}}
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                @if(auth()->user())
                                                                    @if($comentario->user->id == auth()->user()->id)
                                                                        <div class="ml-auto mr-4">
                                                                            <a onclick="eliminar_comentario({{$comentario->id}})"
                                                                               class='borrar_comentario'
                                                                               data-toggle='popover'
                                                                               data-placement='right'
                                                                               data-content='Borrar comentario'><i
                                                                                        class="fa fa-trash text-danger"></i></a>
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <div class="dark-grey-text article ml-3 pb-3">{!! $comentario->comentario !!} </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!--/.First row-->

                                        </div>
                                        <!--/.Main wrapper-->

                                        <div class=" row justify-content-center caja_botones_comentarios {{count($comentarios)<=4?'d-none':''}}">
                                            <a class=" btn-plus btn-floating" onclick="mostrar_mas_comentarios()"
                                               data-container="body" id="mas_comentarios" data-toggle="popover"
                                               data-placement="right" data-content="Mostrar más comentarios"><i
                                                        class="fa fa-plus text-white"></i></a>
                                            <a class=" btn-plus btn-floating d-none " href="#vuelta_comentarios"
                                               onclick="mostrar_menos_comentarios()" data-container="body"
                                               id="menos_comentarios" data-toggle="popover" data-placement="right"
                                               data-content="Mostrar menos comentarios"><i
                                                        class="fa fa-minus  text-white"></i></a>

                                        </div>

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s"
                                             style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
                                        <h3 class="font-weight-bold text-center my-5">Dejar Comentario</h3>

                                        <div class="row">
                                            <div class="col-sm-8 offset-sm-2">
                                                <div class="form-group basic-textarea rounded-corners shadow-textarea">
                                                    @guest
                                                        <label for="comentario">Hay que estar
                                                            <strong>Registrado</strong> para poder comentar.</label>
                                                    @endguest
                                                    <textarea type="text" id="comentario" name="comentario"
                                                              class=" my-editor form-control"></textarea>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="text-right">
                                                @guest
                                                    <a class="btn btn-info" href="{{route('login')}}">Acceder</a>
                                                @else
                                                    <a id="publicar_comentario"
                                                       onclick="enviar_comentario({{$post[0]->id}})"
                                                       href="#vuelta_comentarios"
                                                       class="btn btn-publicar btn-plus ">Publicar</a>
                                                @endguest
                                            </div>

                                        </div>

                                    </section>

                                    <section class="text-left mt-4 hidden-sm">

                                        <h4 class="font-weight-bold mt-5 mb-5 text-center">
                                            <strong>Últimas noticias</strong>
                                        </h4>

                                        <!--Carousel Wrapper-->
                                        <div id="multi-item-example" class="carousel slide carousel-multi-item mx-1"
                                             data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                @foreach($ultimas_noticias->chunk(3) as $key => $noticiasChunk)
                                                    <li data-target="#multi-item-example" data-slide-to="{{$key}}"
                                                        class="{{$loop->first?'active':''}}"></li>
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
                                                                            <img src="{{$noticia->imagen_principal}}"
                                                                                 class="card-img-top imagenes_destacadas"
                                                                                 alt="sample image">
                                                                            <a href="{{route('vista_post',[$noticia->categoria->nombre_categoria,$noticia->slug])}}">
                                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <h4 class="card-title titulo_card_pequeña"
                                                                                title="{{$noticia->titulo_post}}">
                                                                                <strong>{{$noticia->titulo_post}}</strong>
                                                                            </h4>
                                                                            <hr>
                                                                            <p></p>
                                                                            <p class="font-small font-weight-bold dark-grey-text mb-1">
                                                                                <i class="fa fa-clock-o"></i> {{$noticia->fecha}}
                                                                            </p>
                                                                            <p class="font-small grey-text mb-0">{{$noticia->user->nombre}} {{$noticia->user->apellidos}}</p>
                                                                            <p class="text-right mb-0 font-small font-weight-bold">
                                                                                <a href="{{route('vista_post',[$noticia->categoria->nombre_categoria,$noticia->slug])}}">leer
                                                                                    más
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        // enviar comentario


        function enviar_comentario(id) {
            tinymce.triggerSave();

            var route = "{{route('escribir_comentario')}}";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                dataType: "json",
                data: {comentario: $('#comentario').val(), nombre_usuario: $('#nombre_usuario').val(), post_id: id},
                url: route,
                success: function (data) {
                    if (data.respuesta === true) {

                        var tinymce_editor_id = 'comentario';
                        tinymce.get(tinymce_editor_id).setContent('');
                        var id_comentario = data.comentario['id'];

                        $('#caja_comentarios').prepend("<div class='row mb-5 ' id='comentario" + id_comentario + "'>  <div class='col-sm-8 offset-sm-2 card'><div class='ml-1 row mt-2'>" +
                            "<a><h5 class='user-name font-weight-bold'>" + data.nombre + "</h5></a>" +
                            "<div class='card-data ml-3 mt-1'>" +
                            "<ul class='list-unstyled'>" +
                            "<li class='comment-date font-small'>" +
                            "<i class='fa fa-clock-o'></i> " + data.comentario['fecha'] + " " + data.comentario['hora'] +
                            "</li>" +
                            "</ul>" +
                            "</div>" +
                            "<div class='ml-auto mr-4'>" +
                            " <a onclick='eliminar_comentario(" + id_comentario + ")'  class='borrar_comentario' data-toggle='popover' data-placement='right' data-content='Borrar comentario'>" +
                            "<i class='fa fa-trash text-danger'></i>" +
                            " </a>" +
                            "</div>" +
                            "</div>" +
                            "<div class='dark-grey-text article ml-3 pb-3'>" + data.comentario['comentario'] + "</div>" +
                            "</div>" +
                            "</div>");

                        $('.count_comentarios').text(data[1]);

                        var id_comentario_anterior = id_comentario - 4;
                        $('#comentario' + id_comentario_anterior).addClass('comentarios_ocultos');

                        if (data[1] > 4) {
                            $('.caja_botones_comentarios').removeClass('d-none')
                        }
                        alert('comentario publicado correctamente')

                    } else {
                        if (data.respuesta === 'comentario_blanco') {
                            alert('No se puede dejar el comentario en blanco')

                        } else {
                            alert('error al publicar comentario')

                        }
                    }
                }
            })
        }

        function eliminar_comentario(id) {
            tinymce.triggerSave();

            var route = "{{route('eliminar_comentario',':id')}}";
            route = route.replace(':id', id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                dataType: "json",
                url: route,
                success: function (data) {
                    if (data.respuesta === true) {
                        $('#comentario' + id).remove();
                        $('.count_comentarios').text(data[1]);

                        if (data[1] <= 4) {
                            $('.caja_botones_comentarios').addClass('d-none')
                        }
                        var id_comentario_siguiente = id_comentario + 1;
                        $('#comentario' + id_comentario_anterior).addClass('comentarios_ocultos');
                        alert('Comentario borrado')

                    } else {
                        alert('error al publicar comentario')
                    }
                }
            })
        }

        $('.btn-fb ').click(function () {
            open_window('http://www.facebook.com/sharer/sharer.php?u={{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}');
        });
        $('.btn-tw').click(function () {
            open_window('http://twitter.com/share?text={{$post[0]->titulo_post}}&url={{route('vista_post',[$post[0]->categoria->nombre_categoria,$post[0]->slug])}}');
        });

        function open_window(url, name) {
            window.open(url, name);
        }


        var editor_config = {
            height: 300,
            selector: "textarea.my-editor",
            plugins: [
                "searchreplace wordcount visualblocks visualchars code fullscreen",

            ],
            relative_urls: false,

        };

        tinymce.init(editor_config);

        $("#mas_comentarios").popover({trigger: "hover"});
        $("#menos_comentarios").popover({trigger: "hover"});
        $(".borrar_comentario").popover({trigger: "hover"});


        function mostrar_mas_comentarios() {
            $('.comentarios_ocultos').css('display', 'block')
            $('#mas_comentarios').addClass('d-none');

            $('#menos_comentarios').removeClass('d-none');

        }

        function mostrar_menos_comentarios() {
            $('.comentarios_ocultos').css('display', 'none')
            $('#menos_comentarios').addClass('d-none');

            $('#mas_comentarios').removeClass('d-none');


        }

    </script>
@endsection