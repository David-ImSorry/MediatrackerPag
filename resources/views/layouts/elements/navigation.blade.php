<nav class="bg-gradient-to-r from-purple-500 to-indigo-500">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <a href="{{ route('public.index') }}" class="flex items-center text-white text-3xl font-bold">
            Trabajo Final Consolidado 3
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="md:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-lg text-gray-300 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-300 dark:text-gray-400 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Abrir menú principal</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-semibold flex flex-col md:items-center p-4 md:p-0 mt-4 border-t border-purple-700 md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="{{ route('public.index') }}" class="{{ request()->routeIs('public.index') ? 'nav-select' : 'nav-unselect' }}" aria-current="page">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('estudiantes.index') }}" class="{{ request()->routeIs('estudiantes.index') ? 'nav-select' : 'nav-unselect' }}">Estudiantes</a>
                </li>
                <li>
                    <a href="{{ route('carreras.index', ['id'=>1]) }}" class="{{ request()->routeIs('carreras.index') ? 'nav-select' : 'nav-unselect' }}">Carreras</a>
                </li>
                <li>
                    <a href="{{ route('carrera.index', ['id'=>1]) }}" class="{{ request()->routeIs('carrera.index') ? 'nav-select' : 'nav-unselect' }}">Carreras VUE</a>
                </li>
                <li>
                    @auth
                        <div class="hidden md:block">
                            @include('layouts.navigation')
                        </div>
                        <a href="{{ route('public.index') }}" class="block md:hidden py-2 pl-3 pr-4 text-gray-200 rounded hover:bg-gray-800 md:hover:bg-transparent md:border-0 md:hover:text-indigo-300 md:p-0">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-white md:px-3 md:py-2 md:text-lg md:bg-purple-400 md:hover:bg-purple-600 md:rounded-lg">Iniciar Sesión</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... (tu código actual) ... -->
</head>
<body class="bg-gray-900">


    <div class="container mx-auto mt-4 p-4">
        <!-- Contenido adicional debajo de la barra de navegación -->
        <div class="bg-gray-800 text-white p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-2">¡HOLA ROMO!</h3>
            <p class="text-lg">¡HICE MI PAGINA WEB! ¿ESTA BIEN CHEVERE NO?</p>
        </div>
    </div>

    <main class="container mx-auto mt-6">
        <h2 class="font-black text-center text-3xl mb-4 text-white">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

</body>
</html>