@extends('layouts.app')

@section('content')
<h2 class="text-muted">タスク一覧</h2>
<div class="offset-sm-4 mt-4">
  <a href="{{ route('task_new') }}" class="btn btn-primary px-5">新規作成</a>
</div>
<br>
<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">タスク名</th>
        <th scope="col">カテゴリ</th>
        <th scope="col">説明</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
      <th scope="row">{{ $task['task_name'] }}</th>
      <td>{{ $task['category_id'] }}</td>
      <td>{{ $task['description'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
