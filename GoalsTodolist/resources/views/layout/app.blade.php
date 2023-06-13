<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="base-url" content="{{ url('/') }}">
    <!-- GOALS! -->
    <title>Goals!</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href='{{ asset("bootstrap-4.6.0-dist/css/bootstrap.min.css") }}' rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href='{{ asset("css/style.css") }}' rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @yield('contents')
</body>
</html>
