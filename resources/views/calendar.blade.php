<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .mar {
            margin: auto;
            width: 90%; /* 幅を指定する */
            display: block; /* displayをblockに設定 */
        }
    </style>
</head>
<body>

    @extends('layouts.app')
    @section('content')
    <div class="mar">
        <iframe src="https://calendar.google.com/calendar/embed?src=kiiteworld.informal%40gmail.com&ctz=Asia%2FTokyo" style="width: 100%" height="600" scrolling="yes"></iframe>
    </div>
    @endsection

</body>
</html>
