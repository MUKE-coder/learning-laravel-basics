@extends('layout.app');
@section('title','Home Page')
@section('content')

@php
$products=[
    [
        'id'=>1,
        'title'=>'HP Laptop 256',
        'description'=>'This is a nice Laptop',
        'image'=>'/images/laptop.jpg'
],
[
        'id'=>2,
        'title'=>'Dell Laptop 256',
        'description'=>'This is a nice Laptop',
        'image'=>'/images/dell.jpg'
],
[
        'id'=>3,
        'title'=>'Accer Laptop 256',
        'description'=>'This is a nice Laptop',
        'image'=>'/images/accer.jpg'
]
]
@endphp
<div class="h-full w-full flex items-center justify-center">
    {{-- <h1 class="text-6xl">Home Page</h1> --}}
<div class="w-full">
    {{-- <img src="{{ asset('images/backend.jpg') }}" alt=""> --}}
    {{-- <div class="flex justify-center gap-4">
        @foreach ($products as $product )
        <div class="w-[300px]">
            <img src="{{ asset($product['image']) }}" alt="">
            <h2>{{ $product['title'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <x-button class="bg-green-600 text-white" text="View details" link="/product"/>
           </div>
        @endforeach
    </div> --}}
    @livewire('todos')
</div>
</div>
@endsection
