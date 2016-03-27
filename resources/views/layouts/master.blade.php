<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developer&apos;s Best Friend')
    </title>

    <meta charset='utf-8'>
    <link rel="stylesheet" type='text/css' href="/css/bootstrap.min.css">
    <link rel="stylesheet" type='text/css' href="/css/styles.css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <div class="container">
        <header class="row">
            {{-- Logo would go here --}}
            <h1>Developer&apos;s Best Friend</h1>
        </header>

        <section class="row">
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>

        <footer class="row">
            &copy; {{ date('Y') }}
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
