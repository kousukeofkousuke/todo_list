<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
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
            <h2 id='state'></h2>
            <p id='score'></p>
            <h3>期限</h3>
            <p class='deadline'>{{ $task->deadline }}</p>
            <h3>分類</h3>
            
            <h3>ユーザー</h3>
            <p class='user'>{{ $task->user->id }}</p>
            <h3>優先度</h3>
            <p class='priority'>{{ $task->priority }}</p>
            <h3>メモ</h3>
            <p class='memo'>{{ $task->memo }}</p>
            <p class="edit">[<a href="/tasks/{{ $task->id }}/edit">編集</a>]</p>
            <a href="/tasks/{{$task->id}}/state">完了</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    <script>
        if({{ $task->state}} == 1){
            document.getElementById("score").innerHTML ="点数 {{ $task->score }}";
            document.getElementById("state").innerHTML ="完了";
        }
    </script>
</html>
@endsection