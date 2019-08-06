<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

{{-- <script src="{{ asset('statics/highlight/highlight.pack.js') }}"></script> --}}
{{-- <script>hljs.initHighlightingOnLoad();</script> --}}

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('statics/highlight/styles/default.css') }}" rel="stylesheet" disabled>
<link href="{{ asset('statics/highlight/styles/github.css') }}" rel="stylesheet"> --}}

<!-- include prism css/js -->
<link href="{{ asset('statics/prismjs/prism.css') }}" rel="stylesheet">
<script src="{{ asset('statics/prismjs/prism-core.js') }}"></script>
<script src="{{ asset('statics/prismjs/prism-lang.js') }}"></script>

<!-- include summernote css/js -->
<link href="{{ asset('statics/summernote/summernote-bs4.css') }}" rel="stylesheet">
<script src="{{ asset('statics/summernote/summernote-bs4.min.js') }}"></script>