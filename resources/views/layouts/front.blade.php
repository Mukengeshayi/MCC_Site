<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Template Front CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/fontawesome.min.css') }}">
</head>
<body>
    @include('front.partials.header')

    <main>
        @yield('content')
    </main>

    @include('front.partials.footer')

    <!-- Template JS -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>
</html>
