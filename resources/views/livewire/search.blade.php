<div>
    {{-- Do your work, then step back. --}}

    <div>
    <input type="text" wire:model="search" placeholder="Rechercher un produit..."
           class="border px-3 py-2 rounded w-full mb-4 w-80 m-2 ">

    <ul>
        @foreach ($produts as $produt)
            <li class="py-1 border-b m-2 w-80  ">{{ $produt->libelle }}</li>
        @endforeach
    </ul>
</div>

</div>
