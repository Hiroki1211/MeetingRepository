<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Member</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/table.css">
        <link rel="stylesheet" href="/css/button.css">
    </head>
    <body>
        <div class = "menu">
            <button type="button">アカウント発行</button>
            <button type="button" onclick="location.href='./member/tag'">タグ管理</button>
            <button type="button">アカウント削除</button>
        </div>
        <table class="y-scroll simple-table">
            <tr>
                <th class="simple-th">名前</th>
                <th class="simple-th">なまえ</th>
                <th class="simple-th">タグ</th>
                <th class="simple-th">ID</th>
                <th class="simple-th">e-mail</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td class="simple-td">{{ $user-> name_last}} {{ $user-> name_first}}</td>
                    <td class="simple-td">{{ $user-> name_last_read}} {{ $user-> name_first_read}}</td>
                    <td class="simple-td">3-1</td>
                    <td class="simple-td">{{ $user-> id }}</td>
                    <td class="simple-td">{{ $user-> email}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
