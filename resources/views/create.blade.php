@extends('layouts.app')
@section('styles')
    <style>
        .error-message {
            color: red;
            font: 0.8rem;
        }
    </style>
@endsection
@section('title', 'Add Task')
@section('content')
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description">{{ old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection