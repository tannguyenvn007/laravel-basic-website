<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tan</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @include('components.navbar')
    <div class="container">
        @if (Request::is("/"))
            @include('components.showcase')
        @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('components.message')
                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('components.sidebar')
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center fixed-bottom ">
        <p>Copyright 2019 &copy; Tan</p>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
