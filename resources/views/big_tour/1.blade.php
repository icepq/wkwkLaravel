<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $tour->name }}</h1>
    <p>主催者: {{ $tour->organizer }}</p>
    <p>{{ $tour->summary }}</p>
    <p>開催日: {{ $tour->day }}</p>
    <a href="{{ $tour->url }}">詳細リンク</a>

</body>
</html>