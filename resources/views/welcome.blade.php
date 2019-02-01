
@extends('templates.main')
@section('titulo_pagina', 'Blog Tecnología, Smartphones, Ordenadores, Componentes')

@section('estilos')
    <meta name="description" content="tecnozone se crea para todos los apasionados de la tecnología enfocada a ofrecer reviews y analizar los productos más recientes del mercado comparandolos con modelos similares.">
@endsection

@section('cabezera')
    <header>
        <!--<section>
            <div class="">
                <img src="http://mdbootstrap.com/img/Photos/Others/nature4.jpg" style="width: 100%;height: 500px">
            </div>
        </section>-->
                    <div id="carousel_principal" class="carousel slide carousel-fade z-depth-1-half carousel_main" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($post_populares->take(3) as $key => $post)
                            <li data-target="#carousel_principal" data-slide-to="{{$key}}" class="{{$loop->first?'active':''}}"></li>
                                @endforeach
                        </ol>
                        <div class="carousel-inner carousel_principal" role="listbox">
                            @foreach($post_populares->take(3) as $post)

                            <div class="carousel-item {{$loop->first?'active':''}} carousel_principal">
                                <div class="view carousel_principal">
                                    <img src="{{$post->imagen_principal}}" class="img-fluid  imagenes_carousel carousel_principal"  alt="">
                                    <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                        <div class="mask flex-center rgba-black-strong waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <div class="carousel-caption">
                                    <div class="animated fadeInDown">
                                        <h4 class="h4-responsive titulo_post_popular">
                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}" class="white-text font-weight-bold">{{$post->titulo_post}}</a>
                                        </h4>
                                        <p>
                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}" class="white-text">{{$post->categoria->nombre_categoria}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carousel_principal" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_principal" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
    </header>
    @endsection
@section('contenido')
    <section>
        @if($dispositivo == 'movil')
            @if(isset($ultimo_post))
                <div class="bg-white mt-2">
                    <div class="row p-3 pt-3 pb-3">
                        <div class="col-6 ">
                            <a href="{{route('vista_post',[$ultimo_post->categoria->nombre_categoria,$ultimo_post->slug])}}">
                                <h5 title="{{$ultimo_post->titulo_post}}" class="card-title titulo_post_movil">
                                    <strong>{{$ultimo_post->titulo_post}}</strong>
                                </h5>

                                <p class="font-small dark-grey-text mb-0 font-weight-bold">{{$ultimo_post->user->nombre." ".$ultimo_post->user->apellidos}}</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{route('vista_post',[$ultimo_post->categoria->nombre_categoria,$ultimo_post->slug])}}">

                                <img src="{{$ultimo_post->imagen_principal}}" class="imagen_card_movil w-100"
                                     alt="">
                            </a>
                        </div>

                    </div>
                    <hr>
                    @endif

                    @if(isset($posts))
                        @foreach($posts as $post)
                            <div class="row p-3 pt-3 pb-3">
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
                </div>
            @else

        <div class="container-fluid grey lighten-4">
            <div class="container">
                <div class="row pt-4">
                    <div class="publicidad_superior_inferior col-sm-12 publicidad">
                        publicidad
                    </div>
                    <div class="col-lg-8 col-sm-12 mt-4 mx-lg-4">
                        <section class="section extra-margins pb-3 text-center text-lg-left">
                            <div class="row mb-4">
                                @if(isset($ultimo_post))
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="view overlay">
                                            <img src="{{$ultimo_post->imagen_principal}}" class="card-img-top imagen_primer_post" alt="">
                                            <a href="{{route('vista_post',[$ultimo_post->categoria->nombre_categoria,$ultimo_post->slug])}}">
                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        {{--}} <a class="btn-floating btn-action ml-auto mr-4 teal  waves-effect waves-light" id="boton_compartir{{$ultimo_post->id}}" onclick="mostrar_botones_compartir({{$ultimo_post->id}})"><i class="fa fa-share-alt  "></i></a>
                                     <div class="ml-auto btn-compartir" id="caja_compartir{{$ultimo_post->id}}">
                                           <a class="btn-floating btn-action   btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                                           <a class="btn-floating btn-action  btn-tw waves-effect waves-light"><i class="fa fa-twitter "></i></a>
                                       </div>{{--}}
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
                                                <a href="{{route('vista_post',[$ultimo_post->categoria->nombre_categoria,$ultimo_post->slug])}}">leer más
                                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                            </div>
                            @if(isset($posts))
                            @foreach($posts->chunk(2) as $postchunck)
                            <div class="row text-center">
                                @foreach($postchunck as $post)
                                <div class="col-md-6 mb-4">
                                    <div class="card text-left card_secundaria ">
                                        <div class="view overlay">
                                            <img src="{{$post->imagen_principal}}" class="card-img-top imagen_post_secundario" alt="">
                                            <a href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                                <div class="mask rgba-white-slight waves-effect waves-light "></div>
                                            </a>
                                        </div>

                                       {{--}} <a class="btn-floating btn-action ml-auto mr-4 teal waves-effect waves-light" id="boton_compartir{{$post->id}}" onclick="mostrar_botones_compartir({{$post->id}})"><i class="fa fa-share-alt "></i></a>
                                        <div class="ml-auto btn-compartir" id="caja_compartir{{$post->id}}">
                                            <a class="btn-floating btn-action   btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                                            <a class="btn-floating btn-action  btn-tw waves-effect waves-light"   href="https://twitter.com/intent/tweet?text=Hello%20world"><i class="fa fa-twitter "></i></a>
                                        </div>{{--}}

                                        <div class="card-body mx-4 p-0">
                                            <a href="" class="teal-text text-center text-uppercase font-small">
                                            </a><h6 class="mb-3 mt-3"><a href="{{route('categoria',$post->categoria->nombre_categoria)}}" class="teal-text text-center text-uppercase font-small">
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
                    @endif
                    <div class="col-lg-3 col-12 mt-4 hidden-sm">
                       <div class="card mb-4">
                            <div class="view overlay">
                                <img src="{{$user->imagen}}" class="card-img-top imagen_mia" alt="">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Pablo Bonillo</strong>
                                </h5>

                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Mi nombre es Pablo Bonillo, soy estudiante de Ingenieria informatica, desarrollador web y creador de tecnozone...
                                        <a class="teal-text" href="{{route('sobre_mi')}}">+Info</a>
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
                        <section class="section widget-content ">
                            <div class="card card-body pb-0 mb-4">
                                <div class="single-post">
                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARTICULOS POPULARES</strong>
                                    </p>
                                    @foreach($post_populares as $post)
                                    <div class="row mb-4">
                                        <div class="col-5">
                                            <div class="view overlay">
                                                <img src="{{$post->imagen_principal}}" class="img-fluid z-depth-1 rounded-0 imagen_destacados_lateral" alt="sample image">
                                                <a  href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 ">
                                            <h6 class="mt-0 font-small titulo_post_popular" title="{{$post->titulo_post}}">
                                                <a  class="dark-grey-text font-weight-bold" href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                                    <strong>{{$post->titulo_post}}</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> {{$post->fecha}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <section class="mb-4 mt-4 publicidad_lateral publicidad">
                            publicidad
                        </section>
                        <!--<section class="archive mb-5">
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
                        </section>-->

                        <section class="section mb-5">
                            <div class="card card-body pb-0">
                                <div class="single-post">
                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>CATEGORIAS</strong>
                                    </p>
                                    <ul class="list-group my-4">
                                        @if(isset($categorias))
                                        @foreach($categorias as $categoria)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <a href="{{route('categoria',$categoria->nombre_categoria)}}">
                                                    <p class="mb-0">{{$categoria->nombre_categoria}}</p>
                                                </a>
                                                <span class="badge teal  badge-pill font-small" > {{empty($categoria->count)?0:$categoria->count}}</span>
                                            </li>
                                        @endforeach
                                            @endif
                                     
                                    </ul>
                                </div>

                            </div>

                        </section>
                        <section class="mb-5">

                            <div class="row mt-4">
                                <div class="col-md-12">

                                    <div id="carousel_secundario" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel_secundario" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel_secundario" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel_secundario" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            @foreach($post_populares->take(3) as $post)
                                            <div class="carousel-item {{$loop->first?'active':''}}">
                                                <div class="view">
                                                    <img src="{{$post->imagen_principal}}" class="img-fluid imagen_destacados_pequeña" alt="">
                                                    <a  href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}">
                                                        <div class="mask flex-center rgba-stylish-strong waves-effect waves-light"></div>
                                                    </a>
                                                </div>
                                                <div class="carousel-caption titulo_destacados_pequeño">
                                                    <div class="animated fadeInDown">
                                                        <h4 class="h4-responsive titulo_post_popular">
                                                            <a  href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}" class="white-text font-weight-bold">{{$post->titulo_post}}</a>
                                                        </h4>
                                                        <p>
                                                            <a  href="{{route('vista_post',[$post->categoria->nombre_categoria,$post->slug])}}" class="white-text">{{$post->categoria->nombre_categoria}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                                @endforeach

                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_secundario" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_secundario" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="publicidad_superior_inferior col-sm-12 mb-4 publicidad">
                    publicidad
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
<script>
    /*function mostrar_botones_compartir(id) {

        if ($('#caja_compartir'+id).css('display')==='none') {
            $('#caja_compartir'+id).css('display', 'block')
        }
        else{

            $('#caja_compartir'+id).css('display', 'none')
        }
    }*/
</script>
@endsection