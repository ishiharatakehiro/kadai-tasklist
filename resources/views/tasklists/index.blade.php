@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasklist) > 0)
        <ul>
            @foreach ($tasklist as $task)
                <li>{!! link_to_route('tasklist.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasklist.create', '新規タスクの投稿') !!}

@endsection