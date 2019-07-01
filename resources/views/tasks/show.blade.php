@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasks->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasks->content }}</td>
        </tr>
        <tr>
            <th>ステータス:</th>
            <td>{{ $tasks->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $tasks->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks ->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection