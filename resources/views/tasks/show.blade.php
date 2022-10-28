<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class='Tasks'>
            <h1 class='title'>{{ $task->title }}</h1>
            <p>期限</p>
            <p class='body'>{{ $task->deadline }}</p>
            <p>メモ</p>
            <p class='body'>{{ $task->memo }}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>