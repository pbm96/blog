@extends('templates.main')
@section('titulo_pagina', 'Modificar-post')

@section('estilos')

@endsection


@section('contenido')

    <div class="container mt-5">
        {!! Form::Open(['route' => ['modificar_post',$post->id],'method'=>'PUT', 'enctype'=> 'multipart/data', 'files' => true ]) !!}


        <div class="row  mr-5 mt-5">
            <a href="{{route('perfil_superadmin',auth()->user()->id)}}" class="mt-5 ml-3" >Panel Administracion</a>
            <div class="form-check mt-5 ml-auto">
                <input type="checkbox" class="form-check-input" id="publicado" name="publicado"
                       value="1" {{$post->publicado==1?'checked':''}}>
                <label class="form-check-label" for="publicado">Publicar</label>
            </div>
        </div>
        <div class="input-group mb-3 mt-5">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Cargar</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="imagen_principal" id="imagen_principal"
                       aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="imagen_principal">Elegir imagen</label>
            </div>
        </div>

        <label for="titulo_post">Titulo Entrada</label>
        <input type="text" name="titulo_post" id="titulo_post"
               class="form-control {{ $errors->has('titulo_post') ? ' invalid' : '' }}"
               value="{{$post->titulo_post}}"
               required>
        @if ($errors->has('titulo_post'))
            <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('titulo_post') }}</strong>
        </span>
        @endif

        <label for="subtitulo_post">Subtitulo Entrada</label>
        <input type="text" name="subtitulo_post" id="subtitulo_post"
               class="form-control {{ $errors->has('subtitulo_post') ? ' invalid' : '' }}"
               value="{{$post->subtitulo_post}}"
               required>
        @if ($errors->has('subtitulo_post'))
            <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('subtitulo_post') }}</strong>
        </span>
        @endif

        <label for="categoria">Categoria Entrada</label>
        {!! Form::select('categoria_id',$categorias_select,$post->categoria->id,['class'=>'form-control mt-2','required','id'=>'categoria']) !!}

        @if ($errors->has('categoria'))
            <span class="invalid-feedback mr-5">
            <strong>{{ $errors->first('categoria') }}</strong>
        </span>
        @endif


        <label for="descripcion_post">Texto Entrada</label>
        <textarea name="descripcion_post" class="form-control my-editor"
                  id="descripcion_post ">{{$post->descripcion_post}}</textarea>
        @if ($errors->has('descripcion_post'))
            <span class="invalid-feedback mr-5">
             <strong>{{ $errors->first('descripcion_post') }}</strong>
            </span>
        @endif
        <div class="row justify-content-end mr-3 p-3">
            <input type="submit" value="Modificar Entrada" class="btn btn-success">
        </div>
        {!! Form::Close() !!}
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
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'Imagen post', value: 'imagen_post'},
            ],
            table_class_list: [
                {title: 'None', value: ''},
                {title: 'Responsive', value: 'table table-striped table-responsive border-0 h-auto w-auto text-left'},
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
    </script>

@endsection