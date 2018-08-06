<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a href="" class="navbar-brand float-left"><img src="https://image.flaticon.com/icons/svg/58/58742.svg" alt="" style="width: 100px"></a>
        <div class="text-muted mt-4">Sweet Home</div>
    </div>
</nav>
<div class="menu float-left">
    <p>Home|</p>
    <p>Best Home|</p>
    <p>Life style|</p>
    <p>About us|</p>
    <p>Contact us|</p>
</div>
<div class="container-fluid row mt-3">

    <div class="col-md-9">
        @section('main-content')
        @show
    </div>
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" role="tablist">
            <a class="nav-link" href="/admin/product" role="tab"><i class="fas fa-home mr-2"></i></a>
            <a class="nav-link{{$current_page=='product_manager'?' active':''}}" href="/admin/apartment"><i class="fas fa-piggy-bank mr-2"></i>Apartment List</a>
            <a class="nav-link{{$current_page=='category_manager'?' active':''}}" href="/admin/category"><i class="fas fa-clipboard-list mr-2"></i>{{__('message.category_manager')}}</a>
            <a class="nav-link{{$current_page=='article_manager'?' active':''}}" href="/admin/article"><i class="far fa-newspaper mr-2"></i>{{__('message.article_manager')}}</a>
        </div>
    </div>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Aptech FPT @ Copyright 2018</p>
</footer>
</body>
</html>
