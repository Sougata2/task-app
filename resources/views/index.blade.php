@extends('layouts.app')
@section('title', 'List of Tasks')
@section('content')
<div>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
</div>
<div>
    @foreach ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task'=>$task]) }}">{{ $task->title }}</a>
        </div>  
    @endforeach
</div>
<div>
    @if ($tasks->count())
        {{ $tasks->links() }}
    @endif
</div>
@endsection