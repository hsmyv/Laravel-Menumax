<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Food Website</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{asset("user/assets/css/bootstrap.min.css")}}">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="{{asset("user/assets/css/swiper-bundle.min.css")}}">

    <!-- fancy box  -->
    <link rel="stylesheet" href="{{asset("user/assets/css/jquery.fancybox.min.css")}}">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{asset("user/style.css")}}">

</head>
<body class="body-fixed">
    <!-- start of header  -->
    <x-user.header/>
    <!-- header ends  -->
{{$slot}}

    <!-- jquery  -->
    {{-- <script src="{{asset("user/assets/js/jquery-3.5.1.min.js")}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- bootstrap -->
    <script src="{{asset("user/assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("user/assets/js/popper.min.js")}}"></script>

    <!-- fontawesome  -->
    <script src="{{asset("user/assets/js/font-awesome.min.js")}}"></script>

    <!-- swiper slider  -->
    <script src="{{asset("user/assets/js/swiper-bundle.min.js")}}"></script>

    <!-- mixitup -- filter  -->
    <script src="{{asset("user/assets/js/jquery.mixitup.min.js")}}"></script>

    <!-- fancy box  -->
    <script src="{{asset("user/assets/js/jquery.fancybox.min.js")}}"></script>

    <!-- parallax  -->
    <script src="{{asset("user/assets/js/parallax.min.js")}}"></script>

    <!-- gsap  -->
    <script src="{{asset("user/assets/js/gsap.min.js")}}"></script>

    <!-- scroll trigger  -->
    <script src="{{asset("user/assets/js/ScrollTrigger.min.js")}}"></script>
    <!-- scroll to plugin  -->
    <script src="{{asset("user/assets/js/ScrollToPlugin.min.js")}}"></script>
    <!-- rellax  -->
    <!-- <script src="{{asset("user/assets/js/rellax.min.js")}}"></script> -->
    <!-- <script src="{{asset("user/assets/js/rellax-custom.js")}}"></script> -->
    <!-- smooth scroll  -->
    <script src="{{asset("user/assets/js/smooth-scroll.js")}}"></script>
    <!-- custom js  -->
    <script src="{{asset("user/main.js")}}"></script>

</body>

</html>
