<div class="flex justify-center items-center mx-auto">
    <h1>{{ $description }}</h1>
   <button wire:click="increment" class="py-4 px-8 bg-gray-900 text-white rounded-full">Increase</button>
   <h2 class="mx-4">Qty: {{ $qty }}</h2>
   <button wire:click="decrement" class="py-4 px-8 bg-gray-900 text-white rounded-full">Decrease</button>
</div>
