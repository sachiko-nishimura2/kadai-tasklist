@extends('layouts.app')

@section('content')

  <h1>タスク一覧</h1>

  @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $tasks)
                <li>{{ $tasks->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection
