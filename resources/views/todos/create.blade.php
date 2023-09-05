@extends('layout.todo');
@section('title','todos')
@section('content')

<div class="mx-16 flex-col flex  justify-center ">
    <form action="{{ route('todos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="border border-purple-500 py-2 px-4" type="text" name="title">
        <input class="border border-purple-500 py-2 px-4" type="text" name="description" >
        <button class="bg-purple-800 text-white rounded-full py-4 px-8" type="submit">Add todo</button>
    </form>
    {{-- <p>No. of Todos {{ count($todos) }}</p> --}}
   <ul class="list-disc">
   {{-- @foreach ($todos as $todo)
   <li>{{ $note['title']}}</li>
   @endforeach --}}

   </ul>
</div>

@endsection
