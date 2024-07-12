<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('fullcalendar-6.1.14/dist/index.global.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.14"></script>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div id="calendar"></div>
    @endsection
    <script src="{{ asset('js/calendar.js') }}"></script>
</body>
</html>
