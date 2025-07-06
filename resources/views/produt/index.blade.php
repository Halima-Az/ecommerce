<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('include.nav')
   
    <table class="min-w-full bg-white rounded-lg shadow-md mt-4">
        <thead>
            <tr class="bg-blue-600 text-white">
                <th class="py-3 px-6 text-left">id</th>
                <th class="py-3 px-6 text-left">libelle</th>
                <th class="py-3 px-6 text-left">description</th>
                <th class="py-3 px-6 text-left">quantity</th>
                <th class="py-3 px-6 text-left">image</th>
                <th class="py-3 px-6 text-left">price</th>
                <th class="py-3 px-6 text-left">action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produt as $product)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $product->id }}</td>
                    <td class="py-3 px-6">{{ $product->libelle }}</td>
                    <td class="py-3 px-6">{{ $product->description }}</td>
                    <td class="py-3 px-6">{{ $product->quantity }}</td>
                    <td class="py-3 px-6"><img src="{{ asset('storage/' . $product->image) }}" alt="image"
                            class="w-10 h-10 object-cover rounded-lg"></td>
                    <td class="py-3 px-6">{{ $product->price }}</td>
                    <td>
                        <form action="{{ route('delete', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete"
                                class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded mt-4">

                        </form>
                         <form action="{{ route('edit', $product->id) }}" method="get">
                             @csrf
                            <input type="submit" value="modify"
                                class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded mt-4">

                        </form>
                    </td>

                </tr>
            @empty
                <tr>
                    <td>
                        No products until now
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $produt->links() }}


     <a href="{{ route('create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded mt-4">
        add product
    </a>
</body>

</html>
