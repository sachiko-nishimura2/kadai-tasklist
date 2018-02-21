@extends('layouts.app')

@section('content')

   <h1>id: {{ $tasks->id }} のタスク編集ページ</h1>

    <div class="row">
        <div class="col-xs-max">
            {!! Form::model($tasks, ['route' => ['tasks.update', $tasks->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content', 'メッセージ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

            {!! Form::close() !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection
