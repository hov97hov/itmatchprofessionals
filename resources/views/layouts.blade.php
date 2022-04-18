<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
        <link rel="stylesheet" href="{{ asset('css/costum/main.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        {{--Header--}}
        @include('header.index')
        {{--Banner--}}
        @yield('banner')
        {{--Content--}}
        @yield('content')
        {{--Footer--}}
        @include('footer.index')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/pagination.js') }}"></script>
        <script src="{{ asset('js/costum/main.js') }}"></script>
        <script>
            var pathname = window.location.pathname
            $('a[href=#jobListing]').on('click', function () {
                if (pathname != '/') {
                    location.href = "/#jobListing"
                }
            })
        </script>
    </body>
</html>
