<html>

<head>
    <title>@yield('title','Home')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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