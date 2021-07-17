<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VPN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

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
            <three-steps-component
                :title="'{{ $section_one_title }}'"
                :subtitle="'{{$section_one_text}}'"
                :step_one_title="'{{$section_one_step_one}}'"
                :step_two_title="'{{$section_one_step_two}}'"
                :step_three_title="'{{$section_one_step_three}}'"
            ></three-steps-component>
            <hamburger-component
                :section_two_title="'{{$section_two_title}}'"
                :section_two_top_text="'{{$section_two_top_text}}'"
                :section_two_image_path="'{{$section_two_image_path}}'"
                :section_two_bottom_text="'{{$section_two_bottom_text}}'"
            ></hamburger-component>
            <image-right-text-left-component
                :section_three_image_path="'{{$section_three_image_path}}'"
                :section_three_title="'{{$section_three_title}}'"
                :section_three_text="'{{$section_three_text}}'"
            ></image-right-text-left-component>
        </div>
    </body>
</html>
