<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <meta name="description" content="@yield('meta_description', 'Messiah Christian College - Formation d’excellence pour votre avenir')">
    <meta name="keywords" content="@yield('meta_keywords', 'Messiah Christian College, éducation, université chrétienne, école supérieure')">
    <meta name="author" content="Messiah Christian College">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Découvrez Messiah Christian College, votre partenaire académique')">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo-MCC.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name'))">
    <meta name="twitter:description" content="@yield('twitter_description', 'Découvrez Messiah Christian College')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/img/logo-MCC.png'))">

     <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Template Front CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/main.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/custom-highlights.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/front/plugins/glightbox/css/glightbox.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/front/plugins/bootstrap-icons/bootstrap-icons.css') }}">

    @stack('head')
</head>
<body class="index-page" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="0">
    @include('front.partials.header')
    <main class="main">
        @yield('content')
    </main>
    @include('front.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('assets/front/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/aos/aos.js')}}"></script>
    <script src="{{asset('assets/front/plugins/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/front/js/main.js')}}"></script>
</body>
</html>
