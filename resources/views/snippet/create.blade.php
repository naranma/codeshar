@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mt-2">
                <div class="px-4 pt-4">
                    <h5 class="float-left">
                        <b>Novo Snippet</b>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('snippet.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="code">Código/Comando</label>
                            <textarea class="form-control" id="code" name="code" rows="5">{{ old('code') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="language">Linguagem</label>
                            <select class="form-control" id="language" name="language" data-value="{{ old('language') }}">
                                @include('snippet.prism_select')
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" id="description" name="description" rows="6">{{ old('description') }}</textarea>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info text-white">Cancelar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>

             $(function() {
                 $('#description').summernote({
                    height: 150,   //set editable area's height,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                    toolbar: [
                        ['style', ['style']],
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                        ['insert', ['link']],
                        ['view', ['codeview', 'help']]
                    ],

                });
                $('#description').summernote('fontName', 'Arial');


                 // change language option
                $("#language").val( function(){
                    return $(this).data('value')
                }).change();

             });

    </script>
@endpush
