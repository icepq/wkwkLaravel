<!DOCTYPE html>
<html>
<head>
    <title>Big Tour Summarize</title>
</head>
<body>
    <h1>Big Tour Summarize</h1>

    <!-- 並び替えフォーム -->
    <form method="GET" action="{{ route('big_tour.index') }}">
        <label>Sort by:</label>
        <select name="sort">
            <option value="name">作成者</option>
            <option value="created_at">投稿順</option>
        </select>
        <select name="order">
            <option value="asc">昇順</option>
            <option value="desc">降順</option>
        </select>
        <button type="submit">Sort</button>
    </form>

    <!-- 一覧表示 -->
    <table>
        <thead>
            <tr>
                <th>作成者</th>
                <th>企画名</th>
                <th>概要</th>
                <th>開催期間</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
            <tr>
                <td>{{ $tour->name }}</td>
                <td>{{ $tour->organizer }}</td>
                <td>{{ $tour->summary }}</td>
                <td>{{ $tour->day }}</td>
                <td><a href="{{ $tour->url }}">{{ $tour->url }}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 非表示フォーム -->
    <form method="POST" action="{{ route('big_tour.hide') }}">
        @csrf
        <label>非表示にする企画名:</label>
        <select name="organizer">
            @foreach ($tours as $tour)
            <option value="{{ $tour->organizer }}">{{ $tour->organizer }}</option>
            @endforeach
        </select>
        <button type="submit">非表示にする</button>
    </form>
</body>
</html>
