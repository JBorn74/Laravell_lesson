<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title-page')</title>

    <!-- Fonts
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="shortcut icon" href="logo_simple.svg" type="image/x-icon" >-->
    <link rel="shortcut icon" href="{{asset('logo_simple.svg')}}" type="image/x-icon" >
    <!-- Styles
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css" >-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
       <div class="wrapper" >
       @include('../blocks.header') <!--header -->

        <div class="content">
         @yield('content')

        </div>

        @include('../blocks.footer')<!--footer -->
        </div>
</body>
</html>
