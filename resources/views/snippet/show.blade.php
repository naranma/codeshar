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
           
            <div class="card mt-2">
                <div class="px-4 pt-4">
                    <h5 class="float-left">
                        <b>{{ $snippet->name }}</b>
                    </h5>
                    <div class="float-right">
                        <a href="{{ route('snippet.edit', $snippet->id ) }}" class="btn btn-sm btn-outline-success mr-2">Editar</a>
                        <form class="float-right" action="{{ route('snippet.destroy') }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="{{ $snippet->id }}">
                            <button type="submit" class="btn btn-sm btn-outline-primary" onclick="javascript:return confirm('Excluir snippet?')">Excluir</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <pre><code class="language-{{ $snippet->language }}">{{ $snippet->code }}</code></pre>
                    {{-- <p class="card-text">{{ $snippet->description }}</p> --}}
                    <div>{!! $snippet->description !!}</div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
