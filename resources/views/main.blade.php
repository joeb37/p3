@extends ('layouts.master')

@section('title')
@stop

@section('head')
@stop

@section ('content')
    <h2>Lorem Ipsum Generator</h2>
    <form method="POST" action="/lorem">
        {{ csrf_field() }}
        <label for="para_count">How Many Paragraphs?</label>
        <input type="text" id="lorem_count" name="number_of_paragraphs" value="{{ old('number_of_paragraphs') }}">
        @if(count($errors->first('number_of_paragraphs')) > 0)
            <div class="errorText">
                {{ $errors->first('number_of_paragraphs') }}
            </div>
        @endif
        <br>
        <button type="submit">Go</button>
    </form>
    <h2>User Generator</h2>
    <form method="POST" action="/user">
        {{ csrf_field() }}
        <label for="user_count">How Many Users?</label>
        <input type="text" id="user_count" name="number_of_users" value="{{ old('number_of_users') }}">
        @if(count($errors->first('number_of_users')) > 0)
            <div class="errorText">
                {{ $errors->first('number_of_users') }}
            </div>
        @endif
        <br>
        <button type="submit">Go</button>
    </form>
@stop

@section('body')
    {{-- Custom JavaScript for this view
    <script src="/js/book/show.js" ></script>
    --}}
@stop
