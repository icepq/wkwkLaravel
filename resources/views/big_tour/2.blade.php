<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h2>企画ツアー「アドカレ」</h2>
    <div>
        主催 める
        開催期間 2024年12/01 ~ 12/25
    </div>

    
    <table>
        <thead>
            <tr>
                <th>参加者</th>
                <th>ツアー名</th>
                <th>日付</th>
                <th>開始時刻</th>
                <th>コメント</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($tours as $tour) --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                {{-- <td><button onclick="location.href='https://x.com'" >曲を聴く</button></td> --}}
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>    
    @endsection

</body>
</html>