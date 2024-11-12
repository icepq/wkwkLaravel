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

    
@if($details->isEmpty())
    <p>詳細データがありません。</p>
@else
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>URL</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
                <tr>
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->title }}</td>
                    <td>{{ $detail->date }}</td>
                    <td>{{ $detail->time }}</td>
                    <td><a href="{{ $detail->url }}">{{ $detail->url }}</a></td>
                    <td>{{ $detail->comment }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

</body>
</html>