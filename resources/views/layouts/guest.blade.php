<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend/img/fav-icon.png') }}">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/slider/slider.css') }}">
    <link href="{{ asset('frontend/vendor/select2/css/select2-bootstrap.css') }}" />
    <link href="{{ asset('frontend/vendor/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.theme.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Styles -->
</head>

<body class="overflow-x-hidden " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0"
    tabindex="0">

    <div class="bg-body wrapper">
        @include('layouts.frontend.header')
        <section class="block">
            <div class="flex flex-wrap items-center h-screen m-0 bg-white">
                {{ $slot }}
            </div>
        </section>
        @include('layouts.frontend.footer')
    </div>
    <!-- Scripts -->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{asset('frontend/vendor/select2/js/select2.min.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{asset('frontend/vendor/owl-carousel/owl.carousel.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{asset('frontend/vendor/slider/slider.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{asset('frontend/js/custom.js')}}" type="7f7c843e83d5b86d69ea1bc0-text/javascript"></script>
    <script src="{{ asset('frontend/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="7f7c843e83d5b86d69ea1bc0-|49" defer></script>
    <script defer
        src="{{ asset('https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816') }}"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d2f1579dcac3de8","version":"2023.4.0","r":1,"b":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}'
        crossorigin="anonymous"></script>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('js/jqBootstrapValidation.js')}}" type="1ca3e1fae7bcee821cfb7c9d-text/javascript"></script>
    <script src="{{asset('frontend/js/contact_me.js')}}" type="1ca3e1fae7bcee821cfb7c9d-text/javascript"></script>
</body>

</html>
