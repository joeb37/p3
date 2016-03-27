@extends ('layouts.master')

@section('title')
@stop

@section('head')
    {{-- Custom css for this view
    <link href="/css/book/show.css" rel="stylesheet">
    --}}
@stop

@section ('content')
    <a class="backLink" href="/" >Return to main page</a>
    <div class="col-md-12 well">
        @foreach ($users as $user)
            <div>
                <b>{{ $user->name }}</b><br/>
                {{ $user->address }}<br/>
                {{ $user->email }}<br/>
                <br/>
            </div>
        @endforeach
    </div>
@stop

@section('body')
    {{-- Custom JavaScript for this view
    <script src="/js/book/show.js" ></script>
    --}}
@stop
