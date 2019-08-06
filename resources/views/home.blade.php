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
            
            @forelse ($snippets as $snippet)
                <div class="card mt-2">
                    <div class="px-4 pt-4">
                        <h5 class="float-left">
                            <b>{{ $snippet->name }}</b>
                        </h5>
                        <div class="float-right">
                            <a href="{{ route('snippet.show', $snippet->id ) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                            <a href="{{ route('snippet.edit', $snippet->id ) }}" class="btn btn-sm btn-outline-success">Editar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <pre><code class="language-{{ $snippet->language }}">{{ $snippet->code }}</code></pre>
                        {{-- <p class="card-text">{{ $snippet->description }}</p> --}}
                        <div>{!! $snippet->description !!}</div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    Não foi encontrado registros.
                </div>
            @endforelse
            
            <div class="my-3">
                <div class="float-right">
                    @if((Request::only('search')!=null))
                    {{ $snippets->appends(Request::only('search'))->links() }}
                    @else
                    {{ $snippets->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
