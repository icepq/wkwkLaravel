<!DOCTYPE html>
<html>
<head>
    <title>Big Tour 募集フォーム</title>
</head>
<body>
    <h1>Big Tour 募集フォーム</h1>

    <!-- フォーム -->
    <form action="{{ route('big_tour.store') }}" method="POST">
        @csrf
        <label for="name">作成者:</label><br>
        <input type="text" id="name" name="name" maxlength="16" required><br><br>

        <label for="organizer">企画名:</label><br>
        <input type="text" id="organizer" name="organizer" maxlength="32" required><br><br>

        <label for="summary">概要:</label><br>
        <textarea id="summary" name="summary" maxlength="128" required></textarea><br><br>

        <label for="day">開催期間:</label><br>
        <input type="text" id="day" name="day" maxlength="132" required><br><br>

        <label for="url">Xでの告知URL:</label><br>
        <input type="url" id="url" name="url" maxlength="128" required><br><br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="submit">送信</button>
    </form>

</body>
</html>
