<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予定を追加する</title>
    <link rel="stylesheet" href="{{ asset('css/addtuar.css') }}">
</head>
<script type="text/javascript">
    let submitted = false;
</script>
<iframe
    name="hidden_iframe"
    id="hidden_iframe"
    style="display: none"
    onload="if(submitted){window.location='{{ url('/thanks') }}';}"
></iframe>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <h1>予定を追加する</h1>
        <form action="https://docs.google.com/forms/d/e/1FAIpQLSfXpILrFamfJlp7NMh0kus1zDu03DSu8hzD-HUlWSVaEpP1xQ/formResponse" method="POST" target="hidden_iframe" onsubmit="submitted=true;" class="c-form">
            <div class="form-group">
                <label for="account_name">アカウント名</label>
                <input type="text" id="account_name" name="entry.892107423" required>
            </div>
            <div class="form-group">
                <label for="tour_name">ツアー名</label>
                <input type="text" id="tour_name" name="entry.1302642889" required>
            </div>
            <div class="form-group">
                <label for="date">日付</label>
                <input type="date" id="date" name="entry.253294466" required>
            </div>
            <div class="form-group">
                <label for="start_time">開始時刻</label>
                <input type="time" id="start_time" name="entry.1321313887" required>
            </div>
            <div class="form-group">
                <label for="duration">所要時間</label>
                <div>
                    <label><input type="radio" name="entry.217295774" value="30分" required> 30分</label>
                    <label><input type="radio" name="entry.217295774" value="45分" required> 45分</label>
                    <label><input type="radio" name="entry.217295774" value="60分" required> 60分</label>
                    <label><input type="radio" name="entry.217295774" value="90分" required> 90分</label>
                    <label><input type="radio" name="entry.217295774" value="120分以上" required> 120分以上</label>
                </div>
            </div>
            <div class="form-group">
                <label for="comments">その他コメント</label>
                <textarea id="comments" name="entry.404331169" rows="4"></textarea>
            </div>
            <button type="submit">追加する</button>
        </form>
    </div>
    @endsection
</body>
</html>
