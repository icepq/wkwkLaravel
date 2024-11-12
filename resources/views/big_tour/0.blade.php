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
    <p>「 {{ $tour->summary }} 」</p>
    <p>初回開催日: {{ $tour->day }}</p>
    <a href="{{ $tour->url }}">告知ツイート</a>

    <br><br><a>---------------------------------------------------------------------------------</a><br><br>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('big_tour.storeDetail', ['id' => $tour->id]) }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>

    <label for="title">Title:</label>
    <input type="text" name="title" id="title"><br>

    <label for="date">Date:</label>
    <input type="date" name="date" id="date"><br>

    <label for="time">Time:</label>
    <input type="time" name="time" id="time"><br>

    <label for="url">URL:</label>
    <input type="url" name="url" id="url"><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment"></textarea><br>

    <button type="submit">Add Details</button>
</form>


    <br><br><a>---------------------------------------------------------------------------------</a><br><br>

    <h2>Details</h2>
    <ul>
        @foreach($details as $detail)
            <li>
                <strong>Name:</strong> {{ $detail->name }}<br>
                <strong>Title:</strong> {{ $detail->title }}<br>
                <strong>Date:</strong> {{ $detail->date }}<br>
                <strong>Time:</strong> {{ $detail->time }}<br>
                <strong>URL:</strong> <a href="{{ $detail->url }}">{{ $detail->url }}</a><br>
                <strong>Comment:</strong> {{ $detail->comment }}<br>
            </li>
        @endforeach
    </ul>


</body>
</html>