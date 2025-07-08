<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<nav class="bg-blue-600 text-white px-6 py-4 shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="text-2xl font-bold">MonSite</div>

        <!-- Liens de navigation -->
        <ul class="flex space-x-6 text-lg">
            <li><a href="{{ route('index') }}" class="hover:text-gray-300">Accueil</a></li>
            <li><a href="{{ route('create') }}" class="hover:text-gray-300">add+</a></li>
            <li><a href="#" class="hover:text-gray-300">deconnexion</a></li>
            <li><a href="{{route('search')}}"><i class="fas fa-search"></i></a></li>
        </ul>

        <!-- Bouton Connexion -->
        <div>
            <a href="{{ route('connexion') }}"
                class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-100 font-semibold">Connexion</a>
        </div>
    </div>
</nav>
