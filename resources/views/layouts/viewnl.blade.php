<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Ultra&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/style.css','resources/css/slide.css','resources/js/app.js', 'resources/js/sidenav.js'])
</head>
<body>
    <span class="z-20 fixed top-0 right-0 m-2 border-black border-2 rounded overflow-hidden hover:animate-[pulse_0.4s_ease-in-out_reverse]">
        <a class="lan" href="{{$lanfile}}">
                <img src="images/en.png" alt="images/en2.png"
                     height="40"
                     width="40">
        </a>
    </span>
    @yield('content')
</body>
</html>
