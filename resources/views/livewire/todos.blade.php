<div class="mx-16 flex-col flex  justify-center ">
    <form wire:submit='addTodo'>
        <input class="border border-purple-500 py-2 px-4" type="text" wire:model='title'>
        <input class="border border-purple-500 py-2 px-4" type="text" wire:model='desc'>
        <button class="bg-purple-800 text-white rounded-full py-4 px-8" type="submit">Add todo</button>
    </form>
    <p>No. of Todos {{ count($notes) }}</p>
   <ul class="list-disc">
   @foreach ($notes as $note)
   <li>{{ $note['title']}}</li>
   @endforeach

   </ul>
</div>
