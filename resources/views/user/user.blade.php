@extends ('layouts.master')

@section('title')
@stop

@section('head')
    {{-- Custom css for this view
    <link href="/css/book/show.css" rel="stylesheet">
    --}}
@stop

@section ('content')
    @foreach ($users as $user)
        <div>
            {{ $user->name }}<br/>
            {{ $user->address }}<br/>
            {{ $user->email }}<br/>
            <br/>
        </div>
    @endforeach
@stop

@section('body')
    {{-- Custom JavaScript for this view
    <script src="/js/book/show.js" ></script>
    --}}
@stop
