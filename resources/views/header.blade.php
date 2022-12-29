<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Appino - Responsive App Landing Page" />
    <meta name="author" content="iqonicthemes.in" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Biding_app</title>

    <!-- Bootstrap -->
    <link rel="icon" type="image/jpg" href="{{url('img/favicon.png')}}" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{url('css/fontawesome-all.min.css')}}" />

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}" />

    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{url('css/swiper-bundle.min.css')}}"/>

    <link rel="stylesheet" href="{{url('css/jquery.carousel-3d.default.css')}}"/>

    <!-- Style -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">

</head>
<section class="mobile_nav d-block d-md-none">
    <nav class="navbar mobile_navmenu navbar navbar-expand-sm">
     <div class="container-fluid">
        <ul class="navbar-nav m-auto">
            <?php
                    $uri = $_SERVER['REQUEST_URI']; //it will print full url
                    $uriArray = explode('/', $uri); //convert string into array with explode
                    $id = $uriArray[2]; //Print first array value
                    ?>
            <li class="nav-item"><a href="/editprofile/{{ $id }}">Profile </a></li>
            <li class="nav-item"><a href="/bid/{{ $id }}">My Bid</a></li>
            <li class="nav-item"><a href="/home" class="active">Home</a></li>
            <li class="nav-item"><a href="/task/{{ $id }}">My Task</a></li>
            <li class="nav-item"><a href="">support</a></li>
        </ul>
     </div>
     </nav>
 </section>
