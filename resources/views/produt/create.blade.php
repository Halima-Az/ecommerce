@include('include.nav')
@extends('base')
@section('title', 'formulaire')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Créer un produit</h2>
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700">Libelle</label>
                    <input type="text" name="libelle" value="{{old('libelle')}}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400">
                </div>

                <div>
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400"></textarea>
                </div>

                <div>
                    <label class="block text-gray-700">Quantity</label>
                    <input type="number" name="quantity" value="{{old('quantity')}}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400">
                </div>

                <div>
                    <label class="block text-gray-700">Image</label>
                    <input type="file" name="image" 
                        class="w-full text-gray-600 file:mr-3 file:py-2 file:px-4 file:rounded file:border-0 file:bg-blue-600 file:text-white hover:file:bg-blue-700">
                </div>

                <div>
                    <label class="block text-gray-700">Price</label>
                    <input type="number" name="price" value="{{old('price')}}"
                        class="w-full border border-black-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400">
                </div>

                <div class="text-center">
                    <input type="submit" value="Save"
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded mt-4">
                     
                </div>
            </form>
        </div>
    </div>
@endsection
