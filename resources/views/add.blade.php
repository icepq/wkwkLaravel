<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予定を追加する</title>
    <link rel="stylesheet" href="{{ asset('css/addtuar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tab.css') }}">
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
    @section('content')<div class="wrapper">
        <ul class="tab">
            <li><a href="#add">ツアー追加</a></li>
            <li><a href="#delete">ツアー削除</a></li>
            <li><a href="#concept">コンセプト曲</a></li>
            <li><a href="#change">ツアー代行者募</a></li>
        </ul>
            {{-- ツアー追加 --}}
            <div id="add" class="area">
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
            </div>
            {{-- ツアー削除 --}}
            <div id="delete" class="area">
                そのうち作る
            </div>
            {{-- コンセプトツアーの募集Formの募集 --}}
            <div id="concept" class="area">
                作成途中
            </div>
            {{-- ツアー代行者を募集するForm --}}
            <div id="change" class="area">
                作成途中（完成予定日2050/12/31）
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/js/5-4-1.js"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    @endsection
</body>
</html>
