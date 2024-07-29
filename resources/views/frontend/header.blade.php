<!DOCTYPE html>
<html lang="en">

<head>
    <style>
            .hidden {
    display: none;
        }

        </style>
    <meta charset="utf-8">
    
    <title>
     ACPIT, Gorakhpur
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <link href="public/img/logoicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://acpit.in/public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://acpit.in/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
       <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">
    <style>
        .circular-image {
            width: 55px; /* Adjust this value to set the size of the circular image */
            height: 55px; /* Should be equal to the width to ensure a perfect circle */
            border-radius: 50%; /* Create a circular clipping mask */
            overflow: hidden; /* Hide any parts of the image outside the circle */
            }

        .circular-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Preserve the aspect ratio and fill the circle */
        }
        /*.marquee {*/
        /*    position: relative;*/
        /*    overflow: hidden;*/
        /*    white-space: nowrap;*/
        /*    width: 100%;*/
        /*}*/
        
        /*.marquee span {*/
        /*    display: inline-block;*/
            min-width: 100%; /* Ensure the span takes at least 100% width */
        /*    animation: marquee 20s linear infinite , blink 0.2s step-start infinite;*/
        /*    background: linear-gradient(to right, red, blue, yellow);*/
        /*    -webkit-background-clip: text;*/
        /*    color: transparent;*/
            animation-delay: -10s; /* Initial delay to start immediately */
        /*}*/
        
        /*@keyframes marquee {*/
        /*    0% { transform: translateX(-100%); }*/
        /*    100% { transform: translateX(100%); }*/
        /*}*/
        
        /*@keyframes blink {*/
        /*    50% { opacity: 0; }*/
        /*}*/
        
        /*.blink {*/
        /*    animation: blink 1s step-start infinite;*/
        /*    background: linear-gradient(to right, red, blue, yellow);*/
        /*    -webkit-background-clip: text;*/
        /*    background-clip: text;*/
        /*    color: transparent;*/
        /*}*/
        
        /*@keyframes blink {*/
        /*    50% {*/
        /*        opacity: 0;*/
        /*    }*/
        /*}*/
</style>
</head>

<body>

  


    <!-- Navbar Start -->
    <!--<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 fixed-top w-100">-->
    <!--<div class="w-100">-->
    <!--    <h4 class="marquee m-0">-->
    <!--    <a href="{{url('/Events')}}"><span>**Current Updates - Formal Events in Progress**</span></a>-->
    <!--    </h4>-->
    <!--</div>-->
    <!--</nav>-->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 fixed-top">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-4">
        <div class="circular-image">
        <img class="img-fluid" src="public/img/Logo.png" alt="">
    </div>
            <h2 class="m-0 text-primary"></i>&nbsp; &nbsp; ACPIT , Gorakhpur</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{url('/bachelor')}}" class="dropdown-item">Bachelor Courses</a>
                        <a href="{{url('/diploma')}}" class="dropdown-item">Diploma Courses</a>
                        <a href="{{url('/webDevelopment')}}" class="dropdown-item">Web Development Courses</a>
                        <a href="{{url('/nielit')}}" class="dropdown-item">NIELIT Programm</a>
                        <a href="{{url('/Basic Course')}}" class="dropdown-item">Computer Basic Courses</a>
                      
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{url('/photos')}}" class="dropdown-item">Photos</a>
                        <a href="{{url('/videos')}}" class="dropdown-item">Videos</a>
                    </div>
                </div>
                <a href="{{url('/contact')}}" class="nav-item nav-link active">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Student</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{url('/student/loginform')}}" class="dropdown-item">Login</a>
                        
                    </div>
                </div>
            </div>
            <a href="{{url('/joinNow')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
