@props(['link','class','text'])
{{-- link,class,text --}}
<a href="{{ $link }}" class="py-4 px-8 rounded-full {{ $class }}">
   {{$text}}
</a>
