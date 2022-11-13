<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Task</title>
    </head>
    <body>
        <h1 class="title">タスクを完了しますか？</h1>
        <div class="content">
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__score'>
                    <h2>自己採点</h2>
                    <input type='integer' name='task[score]' value="{{ $task->score }}">
                </div>
                <div class='content__memo'>
                    <input type='hidden' name='task[state]' value="1">
                </div>
                [<input type="submit" value="はい">]
                [<a href="/tasks/{{$task->id}}">いいえ</a>]
            </form>
        </div>
    </body>
</html>
@endsection