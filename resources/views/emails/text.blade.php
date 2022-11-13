<!DOCTYPE html>
<p>名前：{{ $user->name }}さん</p>
<p>メールアドレス：{{ $user->email }}</p>
<h1>今日のタスク</h1>
@foreach($tasks as $task)
<p>{{ $task->title }}</p>
@endforeach
