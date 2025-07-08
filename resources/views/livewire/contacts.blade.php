<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <p class="p-10">hello from {{ $name }}</p>
    <button wire:click="changeName()"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded mt-4 p-10">
        clique here </button>
   <ul class="list-disc pl-20 pt-10">
        @foreach ($products as $product)
            <li>{{ $product->libelle }}</li>
        @endforeach
    </ul>
</div>
