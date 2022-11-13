<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='Tasks'>
            @foreach ($tasks as $task)
            <h1>{{ $task->category->name }}</h1>
                <div class='task'>
                    <h2 class='title'>
                        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                    </h2>
                    <p class='deadline'>{{ $task->deadline }}</p>
                </div>
            @endforeach
            [<a href="/">ホーム</a>]
        </div>
        <div class='paginate'>
            {{ $tasks->links() }}
        </div>
    </body>
</html>
@endsection