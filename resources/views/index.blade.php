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
    {{-- 写真 --}}
    <link rel="stylesheet" href="{{ asset('css/slideshow.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')

    <div class="slide-container">
        <div class="slide-wrapper">
            <img class="slide" src="{{ asset('images/pic01.png') }}" >
            <img class="slide" src="{{ asset('images/pic02.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic03.png') }}" >
        {{-- </div>
        <div class="slide-wrapper"> --}}
            <img class="slide" src="{{ asset('images/pic04.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic05.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic06.png') }}" >
            <img class="slide" src="{{ asset('images/pic08.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic091.jpg') }}">
            <img class="slide" src="{{ asset('images/pic092.jpg') }}">
            <img class="slide" src="{{ asset('images/pic01.png') }}" >

        </div>

    </div>

    <div id="calendar"></div>

    @endsection
    <script src="{{ asset('js/calendar.js') }}"></script>
</body>
</html>