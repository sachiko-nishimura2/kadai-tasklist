@extends('layouts.app')

@section('content')

  <h1>タスク一覧</h1>

   <div class="row">
       <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6"></div>

  @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $tasks)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!}</td>
                        <td>{{ $tasks->status }}</td>
                        <td>{{ $tasks->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
