@extends ('layouts.master')

@section('head')
@stop

@section ('content')
    <p class="lead">
        The developer&apos;s best friend tool will generate data that
        you can use to enhance your project. It will create "lorem ipsum"
        text or create fictional users.  You can choose how much data of either type
        to generate.
    </p>
    <div class="col-md-12 well">
        <h2>Lorem Ipsum Text Generator</h2>
        <p>Use this tool to create paragraphs of lorem ipsum text.  Select a
            number of paragraphs to generate, from 1 to 99.</p>
        <form method="POST" action="/lorem">
            {{ csrf_field() }}
            <label for="lorem_count">How Many Paragraphs?</label>
            <input type="text" id="lorem_count" name="number_of_paragraphs" value="{{ old('number_of_paragraphs') }}">
            @if(count($errors->first('number_of_paragraphs')) > 0)
                <div class="errorText">
                    {{ $errors->first('number_of_paragraphs') }}
                </div>
            @endif
            <button type="submit" class="btn btn-md btn-primary">Generate Text</button>
        </form>
    </div>
    <div class="col-md-12 well">
        <h2>User Generator</h2>
        <p>This tool will create sample users.  Select a
            number of users to genreate, from 1 to 99. Each user will have a:</p>
        <ul>
            <li>Name</li>
            <li>Street Address</li>
            <li>Email Address</li>
        </ul>
        <form method="POST" action="/user">
            {{ csrf_field() }}
            <label for="user_count">How Many Users?</label>
            <input type="text" id="user_count" name="number_of_users" value="{{ old('number_of_users') }}">
            @if(count($errors->first('number_of_users')) > 0)
                <div class="errorText">
                    {{ $errors->first('number_of_users') }}
                </div>
            @endif
            <button type="submit" class="btn btn-md btn-primary">Generate Users</button>
        </form>
    </div>
@stop

@section('body')
@stop
