@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<h2 class="text-muted">ホーム</h2>
<p>今日の日付: {{$today}}</p>
@endsection
