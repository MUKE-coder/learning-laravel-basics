@extends('layout.app');
@section('title','About Page')
@section('content')
<div class="">
   <x-page-header class="bg-red-800 text-white w-[100vw]" title="Welcome to About Page"/>
    <x-button text="Visit Desishub" class="bg-red-500" link="https://www.desishub.com"/>
    <x-button text="Visit Google" class="bg-gray-700" link="https://www.google.com"/>
</div>
@endsection
