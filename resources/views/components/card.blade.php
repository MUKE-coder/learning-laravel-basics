@props(['title','class'])
<div class="{{ $class }}">
    <h2 class="text-red-500">{{ $title }}</h2>
    <div class="bg-pink-300">
        {{ $slot }}
    </div>
</div>
