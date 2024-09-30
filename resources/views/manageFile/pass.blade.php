<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/manageFile.css') }}">

</head>
<body>
    @extends('layouts.app')
    @section('content')
    
    <h1>企画募集</h1>

    <!-- フォーム -->
    <form action="{{ route('big_tour.store') }}" method="POST">
        @csrf
        <label for="name">作成者:</label><br>
        <input type="text" id="name" name="name" maxlength="16" required><br><br>

        <label for="organizer">企画名:</label><br>
        <input type="text" id="organizer" name="organizer" maxlength="32" required><br><br>

        <label for="summary">概要:</label><br>
        <textarea id="summary" name="summary" maxlength="128" required></textarea><br><br>

        <label for="day">開幕日:</label><br>
        <input type="date" id="day" name="day" required><br><br>

        <label for="url">Xでの告知URL:</label><br>
        <input type="url" id="url" name="url" maxlength="128"><br><br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="submit">送信</button>
    </form>


    {{-- <h1>企画 非表示</h1> --}}
    <!-- 非表示フォーム -->
    {{-- <form action="{{ route('big_tour.hide') }}" method="POST">
        @csrf
        <label>非表示にする企画名:</label>
        <select name="organizer">
        @foreach ($tour)
            <option value="{{ $tour->organizer }}">{{ $tour->organizer }}</option>
        @endforeach
        </select>
        <br><button type="submit">非表示にする</button>
    </form>     --}}

    @endsection

</body>
</html>