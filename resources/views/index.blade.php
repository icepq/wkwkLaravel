
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- カレンダー --}}
    <script src="{{ asset('fullcalendar-6.1.14/dist/index.global.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.14"></script>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    {{-- 写真スライド --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pic_slide.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')


    <div class="wrapper">
        <ul class="slider">
            <li class="slider-item slider-item01"></li>
            <li class="slider-item slider-item02"></li>
            <li class="slider-item slider-item03"></li>
        </ul></div>



    <div id="calendar"></div>


    @endsection
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/pic_slide.js') }}"></script>
</body>
</html>