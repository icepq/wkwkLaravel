<!-- resources/views/tabmenu.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>5-4-1 タブメニュー</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tab.css') }}">
</head>
<body>
    <div class="wrapper">
        <ul class="tab">
            <li><a href="#add">ツアー追加</a></li>
            <li><a href="#delete">ツアー削除</a></li>
            <li><a href="#concept">コンセプト曲</a></li>
            <li><a href="#change">ツアー代行者募</a></li>
        </ul>
        {{-- ツアー追加 --}}
        <div id="add" class="area">
        {{-- ツアー削除 --}}
        </div>
        <div id="delete" class="area">
        {{-- コンセプトツアーの募集Formの募集 --}}
        </div>
        <div id="concept" class="area">
        {{-- ツアー代行者を募集するForm --}}
        </div>
        <div id="change" class="area">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-4-1/js/5-4-1.js"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
</body>
</html>
