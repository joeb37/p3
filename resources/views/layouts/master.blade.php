<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Helper' --}}
        @yield('title','Developer&apos;s Helper')
    </title>

    <meta charset='utf-8'>
    <link rel="stylesheet" type='text/css' href="/css/bootstrap.min.css">
    <link rel="stylesheet" type='text/css' href="/css/styles.css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        {{-- Logo would go here --}}
        <h1>Developer&apos;s Helper</h1>
    </header>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
