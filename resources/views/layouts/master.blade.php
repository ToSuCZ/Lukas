<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Titulek stránky</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@yield('mce')

</head>
<body>

@include ('layouts.header')

@include ('layouts.nav')

<div class="container">
    <div class="row">
        @yield('content')

        @include('layouts.sidebar')
    </div>
</div>
</body>
</html>