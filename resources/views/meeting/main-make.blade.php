<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Member</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="" method="POST">
            @csrf
            <div class="title">
                <p>タイトル</p>
                <input type="text" name="event[title]" />
            </div>
            <div class="edit_limit"> 
                <!--nullable-->
                <p>入力期限</p>
            </div>
            <div class="day_start">
                <p>開始日</p>
            </div>
            <div class="day_end">
                <p>終了日</p>
            </div>
            <div class="rest">
                <p>土日祝を含む</p>
            </div>
            <div class ="frame">
                <p>1コマ</p>
            </div>
            <div class="time_start">
                <p>開始時刻</p>
            </div>
            <div class="time_end">
                <p>終了時刻</p>
            </div>
            <div class="locate">
                <p>場所</p>
                <input type="text" name="event[locate]" />
            </div>
            <div class="comment">
                <!--nullable-->
                <p>コメント</p>
                <textarea name="event[comment]" ></textarea>
            </div>

        </form>
    </body>
</html>
