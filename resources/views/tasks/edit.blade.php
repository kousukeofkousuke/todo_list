<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Task</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='task[title]' value="{{ $task->title }}">
                </div>
                <div class='content__memo'>
                    <h2>メモ</h2>
                    <input type='text' name='task[memo]' value="{{ $task->memo }}">
                </div>
                <input type="submit" value="保存">
                [<a href="/">ホーム</a>]
            </form>
        </div>
    </body>
</html>
@endsection