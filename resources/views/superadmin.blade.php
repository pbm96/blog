@extends('templates.main')
@section('titulo_pagina', 'Panel-admin')

@section('estilos')
    <style>
        .md-tabs {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);
            border: 0;
            padding: .7rem;
            margin-left: 1rem;
            margin-right: 1rem;
            margin-bottom: -20px;
            background-color: #2bbbad;
            z-index: 1;
            position: relative;
            -webkit-border-radius: .25rem;
            border-radius: .25rem;

        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            background-color: rgba(0, 0, 0, .2);
            border-color: #2bbbad;
            border-radius: .25em;
        }

        .nav-link:hover {
            border: none;
        }

        .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
            border: none;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #FFFFFF;
            padding: .5rem 1.3rem;
        }

        .card .activator {
            position: absolute;
            right: 0;
            font-size: 1.2rem;
        }

        .fecha {
            position: absolute;
            left: 0;

        }

        .contenido{
            padding-top: 10em;
        }
    </style>

@endsection


@section('contenido')
    <div class="container contenido">

        <ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" id="mis_posts_tab" data-toggle="tab" href="#mis_posts" role="tab"
                   aria-controls="mis_posts" aria-selected="true">Mis Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="crear_post_tab" data-toggle="tab" href="#crear_post" role="tab"
                   aria-controls="crear_post" aria-selected="false">Crear Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mi_perfil_tab" data-toggle="tab" href="#mi_perfil" role="tab"
                   aria-controls="mi_perfil" aria-selected="false">Mi perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="usuarios_tab" data-toggle="tab" href="#usuarios" role="tab"
                   aria-controls="usuarios" aria-selected="false">Usuarios</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="myTabContentEx">
            <div class="tab-pane fade active show col-sm-12" id="mis_posts" role="tabpanel" aria-labelledby="mis_posts_tab">
                @foreach($posts->chunk(3) as $postChunk)
                    <div class="row">
                        @foreach( $postChunk as $post)
                            <div class="col-sm-4 mb-4">
                                <div class="card">
                                    <!-- Card image -->
                                    <div class="view overlay">
                                        <img class="card-img-top"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg"
                                             alt="Card image cap">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body">

                                        <!-- Social shares button -->
                                        <a class="activator waves-effect waves-light mr-4 "><i
                                                    class="fa fa-share-alt"></i></a>
                                        <h4 class="card-title ">{{$post->titulo_post}}</h4>


                                        <hr>
                                        <!-- Text -->
                                        <p class="card-text">{{$post->subtitulo_post}}</p>
                                        <!-- Link -->
                                        <a class="ml-4 fecha  text-muted ">{{$post->fecha}}</a>
                                        <a href="#!" class="black-text d-flex justify-content-end"><h5>Read more <i
                                                        class="fa fa-angle-double-right"></i></h5></a>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <div class="row justify-content-around">
                    <div class="">{{ $posts->render() }}</div>
                </div>
            </div>


            <!-- Crear entrada-->
            <div class="tab-pane fade" id="crear_post" role="tabpanel" aria-labelledby="crear_post_tab">
                {!! Form::Open(['route' => 'guardar_post','method'=>'POST', 'enctype'=> 'multipart/data', 'files' => true ,'class'=>'row
  justify-content-center']) !!}
                <label for="titulo_post">Titulo Entrada</label>
                <input type="text" name="titulo_post" id="titulo_post"
                       class="form-control {{ $errors->has('titulo_post') ? ' invalid' : '' }}"
                       value="{{old('titulo_post')}}"
                       required>
                @if ($errors->has('titulo_post'))
                    <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('titulo_post') }}</strong>
        </span>
                @endif

                <label for="subtitulo_post">Subtitulo Entrada</label>
                <input type="text" name="subtitulo_post" id="subtitulo_post"
                       class="form-control {{ $errors->has('subtitulo_post') ? ' invalid' : '' }}"
                       value="{{old('subtitulo_post')}}"
                       required>
                @if ($errors->has('subtitulo_post'))
                    <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('subtitulo_post') }}</strong>
        </span>
                @endif

                <label for="categoria">Categoria Entrada</label>
                {!! Form::select('categoria_id',$categorias,null,['class'=>'form-control mt-2','required','id'=>'categoria']) !!}

                @if ($errors->has('categoria'))
                    <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('categoria') }}</strong>
        </span>
                @endif


                <label for="descripcion_post">Texto Entrada</label>

                <textarea name="descripcion_post"  class="form-control my-editor" id="descripcion_post ">{{old('descripcion_post')}}</textarea>
                @if ($errors->has('descripcion_post'))
                    <span class="invalid-feedback mr-5">
             <strong>{{ $errors->first('descripcion_post') }}</strong>
            </span>
                @endif

                <input type="submit" value="Crear Entrada">
                {!! Form::Close() !!}
            </div>
            <div class="tab-pane fade" id="mi_perfil" role="tabpanel" aria-labelledby="mi_perfil_tab">
                <p>Mi perfil</p>
            </div>
            <div class="tab-pane fade" id="usuarios" role="tabpanel" aria-labelledby="usuarios_tab">
                usuarios
            </div>


        </div>
    </div>


        @endsection
        @section('scripts')
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

            <script>

                var editor_config = {
                    path_absolute : "/",
                    height: 500,
                    selector: "textarea.my-editor",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                    relative_urls: false,
                    image_advtab: true,
                    file_browser_callback : function(field_name, url, type, win) {
                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                        if (type == 'image') {
                            cmsURL = cmsURL + "&type=Images";
                        } else {
                            cmsURL = cmsURL + "&type=Files";
                        }

                        tinyMCE.activeEditor.windowManager.open({
                            file : cmsURL,
                            title : 'Filemanager',
                            width : x * 0.8,
                            height : y * 0.8,
                            resizable : "yes",
                            close_previous : "no"
                        });
                    }
                };

                tinymce.init(editor_config);


                /** $(document).on('click','.pagination a', function(e){
            e.preventDefault();
             var page = $(this).attr('href').split('page=')[1];

             getProducts(page);

        });

                 function getProducts(page) {
            $.ajax({
                url :'/ajax/products?page='+page
            }).done(function (data) {
                $('.principal').html(data);
            })
        }*/

            </script>
@endsection
