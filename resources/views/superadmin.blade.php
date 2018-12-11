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

        .contenido {
            padding-top: 10em;
        }

        .editar_categoria {
            display: none;
        }

        .borrar {
            margin: .375rem;
            padding-top: .7rem;
            padding-bottom: .7rem;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }
        .borrar:hover{
            box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
            outline: 0;
        }

        /* switch*/
        .switch label {
            cursor: pointer;
        }
        .switch label input[type=checkbox] {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .switch label .lever {
            content: "";
            display: inline-block;
            position: relative;
            background-color: #818181;
            -webkit-border-radius: .9375rem;
            border-radius: .9375rem;
            margin-right: .625rem;
            vertical-align: middle;
            margin: 0 1rem;
            width: 2.5rem;
            height: .9375rem;
            -webkit-transition: background .3s ease;
            -o-transition: background .3s ease;
            transition: background .3s ease;
        }
        .switch label input[type=checkbox]:checked+.lever {
            background-color: #dccfe2;
        }
        .switch label input[type=checkbox]:checked+.lever:after {
            background-color: #a6c;
            left: 1.5rem;
        }
        .switch label .lever:after {
            content: "";
            position: absolute;
            display: inline-block;
            background-color: #f1f1f1;
            -webkit-border-radius: 1.3125rem;
            border-radius: 1.3125rem;
            left: -.3125rem;
            top: -.1875rem;
            -webkit-box-shadow: 0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,.4);
            box-shadow: 0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,.4);
            width: 1.3125rem;
            height: 1.3125rem;
            -webkit-transition: left .3s ease,background .3s ease,-webkit-box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,-webkit-box-shadow 1s ease;
            -o-transition: left .3s ease,background .3s ease,box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,box-shadow 1s ease,-webkit-box-shadow 1s ease;
        }
        .card.card-cascade.narrower .view.view-cascade {
            margin-left: 4%;
            margin-right: 4%;
            margin-top: -1.25rem;
        }
        .card.card-cascade .view.view-cascade.gradient-card-header {
            padding: 1.6rem 1rem;
            text-align: center;
        }
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

        .imagen_post_secundario{
            height: 210px;
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
            <li class="nav-item">
                <a class="nav-link" id="comentarios_tab" data-toggle="tab" href="#comentarios" role="tab"
                   aria-controls="comentarios" aria-selected="false">Comentarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="categorias_tab" data-toggle="tab" href="#categorias" role="tab"
                   aria-controls="categorias" aria-selected="false">Categorias</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="myTabContentEx">
            <div class="tab-pane fade active show col-sm-12" id="mis_posts" role="tabpanel"
                 aria-labelledby="mis_posts_tab">
                <section class="mt-5">
                    <div class="container-fluid grey lighten-4">
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
                                                                        <a class="btn btn-outline-danger" href="{{route('eliminar_post',$post->id)}}"><i class="fa fa-trash"></i></a>
                                                                        <a class="btn btn-outline-info" href="{{route('modificar_post_vista',$post->id)}}"><i class="fa fa-pencil"></i></a>
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
                </section>


            <!-- Crear entrada-->
            <div class="tab-pane fade" id="crear_post" role="tabpanel" aria-labelledby="crear_post_tab">
                {!! Form::Open(['route' => 'guardar_post','method'=>'POST', 'enctype'=> 'multipart/data', 'files' => true ,'class'=>'row
  justify-content-center']) !!}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="imagen_principal" id="imagen_principal" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="imagen_principal">Choose file</label>
                    </div>
                </div>

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
                {!! Form::select('categoria_id',$categorias_select,null,['class'=>'form-control mt-2','required','id'=>'categoria']) !!}

                @if ($errors->has('categoria'))
                    <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('categoria') }}</strong>
        </span>
                @endif


                <label for="descripcion_post">Texto Entrada</label>
                <textarea name="descripcion_post" class="form-control my-editor"
                          id="descripcion_post ">{{old('descripcion_post')}}</textarea>
                @if ($errors->has('descripcion_post'))
                    <span class="invalid-feedback mr-5">
             <strong>{{ $errors->first('descripcion_post') }}</strong>
            </span>
                @endif

                <input type="submit" value="Crear Entrada">
                {!! Form::Close() !!}
            </div>

            <!--MI PERFIL-->

            <div class="tab-pane fade" id="mi_perfil" role="tabpanel" aria-labelledby="mi_perfil_tab">
                {!! Form::Open(['route'=>['editar_perfil',auth()->user()->id],'method'=>'PUT',]) !!}

                <section class="section mt-3">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card card-cascade narrower">
                                <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                    <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
                                </div>
                                <div class="card-body card-body-cascade text-center">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto">

                                    <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                                    <div class="row flex-center">
                                        <button class="btn btn-info btn-rounded btn-sm waves-effect waves-light">Upload New Photo</button><br>
                                        <button class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <div class="card card-cascade narrower">
                                <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                                    <h5 class="mb-0 font-weight-bold">Editar Perfil</h5>
                                </div>
                                <div class="card-body card-body-cascade text-center">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="nombre" name="nombre" class="form-control " value="{{auth()->user()->nombre}}">
                                                    <label for="nombre" data-error="wrong"  data-success="right" class="active">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="apellidos" name="apellidos" class="form-control " value="{{auth()->user()->apellidos}}">
                                                    <label for="apellidos">Apellidos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="email" id="email" value="{{auth()->user()->email}}" class="form-control ">
                                                    <label for="email" >Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="email" id="form76" class="form-control validate">
                                                    <label for="form76">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="form77" class="form-control validate">
                                                    <label for="form77" data-error="wrong" data-success="right">Confirmar Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <textarea type="text" id="descripcion_user"  name="descripcion_user" class="md-textarea form-control" rows="3" onfocus="aumentar_descripcion()" onfocusout="disminuir_descripcion()"></textarea>
                                                    <label for="descripcion_user">Descripcion</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center my-4">
                                                <i class="btn btn-info btn-rounded waves-input-wrapper waves-effect waves-light" style="color:rgb(255, 255, 255);background:rgba(0, 0, 0, 0)"><input type="submit" value="Update Account" class="waves-button-input" style="background-color:rgba(0,0,0,0);"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {!! Form::close() !!}
            <div class="tab-pane fade" id="usuarios" role="tabpanel" aria-labelledby="usuarios_tab">
                <div class="row justify-content-end mr-1">
                    <a class="btn btn-outline-success waves-effect " href="{{route('register')}}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>

                @foreach($users as $user)
                    <div class="card mb-3 p-2">
                        <div class="row ">
                            <div class="col-sm-3 text-uppercase ml-4 pt-3">
                                {{$user->nombre}} {{$user->apellidos}}
                            </div>
                            <section class="col-sm-4 ml-auto row">
                                <a class=" btn btn-outline-info waves-effect"
                                   onclick="editar_usuario({{$user->id}})">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {!! Form::Open(['route'=>['eliminar_usuario',$user->id],'method'=>'DELETE',]) !!}
                                {!!Form::submit('eliminar',['class'=>'  borrar btn-outline-danger waves-effect confirm ','data-confirm' => 'Seguro que quieres borrar el usuario?'])!!} {!! Form::close() !!}
                            </section>
                        </div>
                        {!! Form::Open(['route' => ['editar_usuario_admin',$user->id],'method'=>'PUT',]) !!}

                        <div class="  editar_categoria mt-3" id="editar_usuario{{$user->id}}">
                            <div class="row ">
                                <div class="col-sm-3 text-uppercase ml-4 ">
                                    Admin
                                </div>
                                <section class="col-sm-4 ml-auto row">
                                    <div class="switch ">
                                        <label>
                                            Off
                                            <input type="checkbox" {{$user->admin==1?'checked':''}} name="admin" value="1" id="check{{$user->id}}" >
                                            <span class="lever"></span> On
                                        </label>
                                    </div>
                                </section>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3 text-uppercase ml-4 ">
                                    Superadmin
                                </div>
                                <section class="col-sm-4 ml-auto row">
                                    <div class="switch ">
                                        <label>
                                            Off
                                            <input type="checkbox" {{$user->superadmin==1?'checked':''}} name="superadmin" value="1" id="check{{$user->id}}">
                                            <span class="lever"></span> On
                                        </label>
                                    </div>
                                </section>
                            </div>
                            <div class="row justify-content-end mr-4">
                            <input type="submit" class=" btn-outline-success waves-effect p-2 justify-content-end" value="Guardar">
                            </div>
                            {!! Form::close() !!}
                        </div>


                    </div>

                @endforeach
            </div>
            <div class="tab-pane fade" id="comentarios" role="tabpanel" aria-labelledby="comentarios_tab">
                comentarios
            </div>
            <div class="tab-pane fade" id="categorias" role="tabpanel" aria-labelledby="categorias_tab">
                <div class="row justify-content-end mr-1">
                    <a class="btn btn-outline-success waves-effect " onclick="nueva_categoria()">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
                {!! Form::Open(['route' => 'añadir_categoria','method'=>'POST',]) !!}
                <div class="row editar_categoria md-form col-sm-12 " id="añadir_categoria_caja">
                    <input type="text" name="nombre_categoria" class=" col-sm-4 "
                           id="añadir_categoria">
                    <label for="añadir_categoria" style="left: 1em">Nombre categoria</label>
                    <input type="submit" class=" btn-outline-success waves-effect p-2" value="Guardar">
                </div>
                {!! Form::close() !!}
                @foreach($categorias as $categoria)
                    <div class="card mb-3 p-2">
                        <div class="row ">
                            <div class="col-sm-3 text-uppercase ml-4 pt-3">
                                {{$categoria->nombre_categoria}}
                            </div>
                            <section class="col-sm-4 ml-auto row">
                                <a class=" btn btn-outline-info waves-effect"
                                   onclick="editar_categoria({{$categoria->id}})">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {!! Form::Open(['route'=>['eliminar_categoria',$categoria->id],'method'=>'DELETE',]) !!}
                                {!!Form::submit('eliminar',['class'=>'  borrar btn-outline-danger waves-effect confirm ','data-confirm' => 'Seguro que quieres borrar la categoria?'])!!} {!! Form::close() !!}
                            </section>
                        </div>
                    </div>
                    {!! Form::Open(['route' => ['editar_categoria',$categoria->id],'method'=>'PUT',]) !!}
                    <div class="row editar_categoria md-form col-sm-12 " id="editar_categoria{{$categoria->id}}">
                        <input type="text" name="nombre_categoria" class=" col-sm-4 "
                               id="nombre_categoria{{$categoria->id}}" placeholder="{{$categoria->nombre_categoria}}">
                        <label for="nombre_categoria{{$categoria->id}}" style="left: 1em">Nombre categoria</label>
                        <input type="submit" class=" btn-outline-success waves-effect p-2" value="Guardar">
                    </div>
                    {!! Form::close() !!}
                @endforeach
            </div>


        </div>
    </div>


@endsection
@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>

        var editor_config = {
            path_absolute: "/",
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
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);

        function editar_categoria(id) {
            var caja = $('#editar_categoria' + id)
            if (caja.css("display") === 'none') {
                caja.fadeIn();
            } else {
                caja.fadeOut();
            }

        }
        function editar_usuario(id) {
            var caja = $('#editar_usuario' + id)
            if (caja.css("display") === 'none') {
                caja.fadeIn();
            } else {
                caja.fadeOut();
            }

        }


        function nueva_categoria() {
            var caja = $('#añadir_categoria_caja')
            if (caja.css("display") === 'none') {
                caja.show();
            } else {
                caja.hide();
            }

        }

        $('.confirm').on('click', function (e) {
            return !!confirm($(this).data('confirm'));
        });

        function aumentar_descripcion() {
            $('#descripcion_user').prop('rows','10');
        }

        function disminuir_descripcion() {
            $('#descripcion_user').prop('rows','3');
        }
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
