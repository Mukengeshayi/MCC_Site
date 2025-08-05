<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - @yield('title')</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/adminlte.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Summernote -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="sidebar-mini layout-fixed sidebar-open" style="height: auto;">
    <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
    <img class="animation__shake" src="img/logo-mcc.png" alt="MccLogo" height="60" width="60" style="display: none;">
  </div>
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')

        <div class="content-wrapper" style="min-height: 706.4px;">
            @yield('content')
        </div>

        @include('admin.partials.footer')
        <div id="sidebar-overlay"></div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{asset('assets/admin/js/adminlte.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $(function () {
            $('.summernote').summernote({
                height: 300,
                toolbar: [
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']]
                ]
            });
        });
    </script>
</body>
</html>
