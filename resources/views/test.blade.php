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
    <link rel="stylesheet" href="{{ asset('css/index_form.css') }}">
    {{-- 写真 --}}
    <link rel="stylesheet" href="{{ asset('css/slideshow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')

    <div class="slide-container">
        <div class="slide-wrapper">
            <img class="slide" src="{{ asset('images/pic01.png') }}" >
            <img class="slide" src="{{ asset('images/pic02.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic03.png') }}" >
            <img class="slide" src="{{ asset('images/pic04.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic05.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic06.png') }}" >
            <img class="slide" src="{{ asset('images/pic08.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic091.jpg') }}">
        </div>
        <div class="slide-wrapper">
            <img class="slide" src="{{ asset('images/pic092.jpg') }}">
            <img class="slide" src="{{ asset('images/pic03.png') }}" >
            <img class="slide" src="{{ asset('images/pic04.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic05.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic06.png') }}" >
            <img class="slide" src="{{ asset('images/pic08.jpg') }}" >
            <img class="slide" src="{{ asset('images/pic091.jpg') }}">
            <img class="slide" src="{{ asset('images/pic092.jpg') }}">
        </div>
    </div>
    
    <div class="box28">
        <span class="box-title">開催中の大型企画</span>
            <table>
                <thead>
                    <tr>
                        <th>作成者</th>
                        <th>企画名</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                    <tr>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->organizer }}</td>
                        <td><button onclick="location.href='/views/bigyour/{{ $tour->id }}'">詳細</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    


    </div>
    <div class="box29">
        <span class="box-title">ツアーを行う際の曲募集中一覧</span>
        <a>Comming Sooooooon</a>
    </div>
    <div class="box30">
        <span class="box-title">ツアー代行者募集者</span>
        <a>Comming Soon</a>
    </div>
    <div id="calendar"></div>

    <script src="{{ asset('js/calendar.js') }}"></script>
    @endsection
</body>
</html>