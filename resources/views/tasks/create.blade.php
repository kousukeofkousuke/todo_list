<!DOCTYPE HTML>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Task</title>
    </head>
    <body>
        <h1>タスク</h1>
        <form action="/tasks" method="POST">
            @csrf
            <div class="title">
                <input type="text" name="task[title]" placeholder="タスクの名前"/>
            </div>
            <div class="datetime">
                <h2>期限日</h2>
                <label for="deadline" class="col-form-label">日時を入力</label>
                <input type="datetime-local" class="form-control" id="deadline" name="task[deadline]">
            </div>
            <div class="category">
                <h2>カテゴリー</h2>
                <select name="task[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="priority">
                <h2>優先度</h2>
                <input type="integer" name="task[priority]" placeholder="最大５">
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="task[memo]" placeholder="メモ"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
@endsection