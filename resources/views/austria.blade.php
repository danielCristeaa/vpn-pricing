<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VPN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <clientinfo-component></clientinfo-component>
            <navbar-component></navbar-component>
            <jumbotron-component
                :title="'{{ $banner_title }}'"
                :text="'{{$banner_text}}'"
                :start-free-trial-text="'{{$banner_start_free_trial}}'"
                :image="'{{$banner_image_path}}'"
            ></jumbotron-component>
        </div>
    </body>
</html>
