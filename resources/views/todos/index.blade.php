@extends('layout.todo')
@section('title','todos')
@section('content')

<div class="flex items-center justify-between gap-4 ">
    <h2>Todos</h2>
    <a class="px-8 py-2 bg-slate-800 text-white rounded-full " href="{{ route('todos.create') }}">Add New Todo</a>
</div>

@if (count($todos) > 0)
<div class="mt-8">
    @foreach ($todos as $todo )
       <div class="border-b py-4">
        <a href="{{ route("todos.show",$todo) }}" class="font-bold underline">{{ $todo->title }}</a>
       <p>{{ $todo->description }}</p>
       </div>
       {{-- <hr> --}}
    @endforeach
</div>
@else
<p>No Todos Found</p>
@endif

@endsection
