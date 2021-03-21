@extends('layouts.app')

@section('content')
<h2 class="text-muted">タスク一覧</h2>
<div class="offset-sm-4 mt-4">
    <a href="{{ route('task_new') }}" class="btn btn-primary px-5">新規作成</a>
</div>
@endsection
