<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>5-4-1 タブメニュー</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    

    
        <!-- Big Tour 一覧表示 -->
    <h2>今までの大型企画 一覧</h2>
    <font color="red">詳細ボタンはまだ押せないよん</font><br><br>
        <!-- 並び替えフォーム -->
    <form method="GET" action="{{ route('save') }}">
        {{-- <label>Sort by:</label> --}}
        <label>　　　　  </label>
        <select name="sort">
            <option value="name">作成者</option>
            <option value="created_at">投稿順</option>
        </select>
        <select name="order">
            <option value="asc">昇順</option>
            <option value="desc">降順</option>
        </select>
        <button type="submit">変更</button>
    </form>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>作成者</th>
                <th>企画名</th>
                <th>概要</th>
                <th>開催期間</th>
                <th>URL</th>
                <th>表示/非表示</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
            <tr>
                <td>{{ $tour->id }}</td>
                <td>{{ $tour->name }}</td>
                <td>{{ $tour->organizer }}</td>
                <td>{{ $tour->summary }}</td>
                <td>{{ $tour->day }}</td>
                <td><a href="{{ $tour->url }}">{{ $tour->url }}</a></td>
                <td>{{ $tour->is_visible ? '表示中' : '非表示' }}</td>
                <td><button onclick="location.href='/big_tour/{{ $tour->id }}'" >詳細</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>    
    
    

    @endsection
</body>
</html>
