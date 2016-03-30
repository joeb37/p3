@extends ('layouts.master')

@section('title')
@stop

@section('head')
@stop

@section ('content')
    <a class="backLink" href="/" >Return to main page</a>
    <div class="col-md-12 well">
        @foreach ($text as $p)
            <p>{{ $p }}</p>
        @endforeach
    </div>
@stop

@section('body')
@stop
