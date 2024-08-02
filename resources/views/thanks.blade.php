<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="{{ asset('css/addtuar.css') }}">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <h1>送信完了</h1>
        <p>予定が正常に追加されました。ありがとうございました。</p>
        <a href="{{ url('/index') }}">戻る</a>
    </div>
    @endsection
</body>
</html>
