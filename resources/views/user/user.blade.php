@extends ('layouts.master')

@section('title')
@stop

@section('head')
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
@stop
