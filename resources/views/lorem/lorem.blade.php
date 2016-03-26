@extends ('layouts.master')

@section('title')
@stop

@section('head')
    {{-- Custom css for this view
    <link href="/css/book/show.css" rel="stylesheet">
    --}}
@stop

@section ('content')
    <div>
        {!! $text !!}  {{-- use !! to prevent escaping --}}
    </div>
@stop

@section('body')
    {{-- Custom JavaScript for this view
    <script src="/js/book/show.js" ></script>
    --}}
@stop
