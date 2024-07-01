<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('img/zorro.png')}}">
    <title>@yield('title') - Clínica Veterinaria FOX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="bg-white text-gray-900 flex flex-col min-h-screen" >
    <nav class="bg-gray-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center md:items-stretch md:justify-start">
                    <div class="flex-shrink-0">
                        <a href="{{ route('inicio') }}" class="text-white text-xl font-bold">Clínica Veterinaria FOX</a>
                    </div>
                    <div class="hidden md:block md:ml-6">
                        <div class="flex space-x-4">
                            <a href="{{ route('inicio') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="{{ route('nosotros') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nosotros</a>
                            <a href="{{ route('contactos') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contactos</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:ml-6">
                    <div class="flex space-x-4">
                        @guest
                        <a href="{{ route('usuarios.registrar') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>
                        <a href="{{ route('usuarios.inicio_sesion') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar Sesión</a>
                        @else
                        <a href="{{ route('usuarios.logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cerrar Sesión</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>


        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('inicio') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
                <a href="{{ route('nosotros') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Nosotros</a>
                <a href="{{ route('contactos') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contactos</a>
                @guest
                <a href="{{ route('usuarios.registrar') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Registrarse</a>
                <a href="{{ route('usuarios.inicio_sesion') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Iniciar Sesión</a>
                @else
                <a href="{{ route('usuarios.logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Cerrar Sesión</a>
                @endguest
            </div>
        </div>
    </nav>
    <div class="flex-grow relative">
        @if(session('success'))
            <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-md" role="alert">
                <strong class="font-bold px-2">¡Éxito!</strong>
                <span class="block md:inline">{{ session('success') }}</span>
                <button type="button" class="close-alert ml-auto text-green-700 font-bold">X</button>
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative max-w-md" role="alert">
                <strong class="font-bold px-2">¡Error!</strong>
                <ul class="mt-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close-alert ml-auto text-red-700 font-bold">X</button>
            </div>
        @endif
    
        

        <section class="flex-grow min-h-[calc(100vh-8rem)]">
            @yield('content')
        </section>
    </div>


    <footer class="bg-gray-900 text-white text-center py-4 mt-auto">
        Clínica Veterinaria FOX Copyrights 2024 • Todos Los Derechos Reservados
    </footer>

    <script>
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuButton.setAttribute('aria-expanded', !expanded);
            mobileMenu.hidden = !mobileMenu.hidden;
        });
    </script>
</body>
</html>