<html>

<head>
    <title>@yield('title','Home')</title>
</head>

<body>
    <div>
        <a href="/">Home</a>
        |
        <a href="/pages/about">About</a>
        |
        <a href="/pages/contact">Contact</a>
        |
        <a href="/blog">Blog</a>
    </div>

    <div>
        @yield('content')
    </div>

    @yield('end-js')
</body>

</html>