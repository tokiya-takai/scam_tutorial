<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>i-Lite | 触って動かしてITリテラシーを学ぶならi-Lite</title>
    <meta name="description" content="i-Lite(アイリテ)は、オンライン演習型ITリテラシー学習アプリです。インターネットを使った、
    サイバー攻撃と言われる身近な脅威を、「実践的に、楽しく」学べるよう、サポートします。パソコンやスマートフォンを使うのが当たり前になった時代だからこそ、
    ちょっとした知識と心がけを身に付けて、安心・安全にITを使えるようになってもらうのが私達の願いです。">

    <!-- Scripts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
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
    <script src="{{ mix('js/wave.js') }}" defer></script>
    <script src="{{ mix('js/smooth.js') }}"></script>
    <script src="{{ mix('js/limited.js') }}"></script>
</body>
</html>
