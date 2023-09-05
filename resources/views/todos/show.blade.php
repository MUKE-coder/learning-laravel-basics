@extends('layout.todo')
@section('title','todos')
@section('content')

@if ($todo)
<div class="mt-8">
    <p class="font-bold">{{ $todo->title }}</p>
    <p>{{ $todo->description }}</p>
    </div>
</div>
@else
<p>No Todos Found</p>
@endif

@endsection
