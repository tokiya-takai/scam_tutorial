<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>i-Lite</title>

    <!-- Scripts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="/css/destyle.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
</head>
<body>
    <div id="main">
        
        @yield('content')
        
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/lesson1.js') }}" defer></script>
</body>
</html>
