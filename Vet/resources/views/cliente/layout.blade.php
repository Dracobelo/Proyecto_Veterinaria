<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/zorro.png') }}">
    <title>@yield('title') - Cliente - Clínica Veterinaria FOX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="bg-white text-gray-900 flex flex-col min-h-screen">
    <nav class="bg-gray-800 shadow-lg relative z-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                        <a href="{{ route('usuarios.inicio_cliente') }}" class="text-white text-xl font-bold">Clínica Veterinaria FOX</a>
                    </div>
                    <div class="hidden md:block md:ml-6">
                        <div class="flex space-x-4">
                            <a href="{{ route('usuarios.inicio_cliente') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
                            <a href="{{ route('cliente.mascotas') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Mis Mascotas</a>
                            <a href="{{ route('cliente.tienda') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tienda</a>
                            <a href="{{ route('cliente.carrito') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Mi Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:ml-6">
                    <ul class="flex items-center space-x-4">
                        @auth
                        @php
                            $cliente = Auth::user()->cliente;
                            $nombreCompleto = $cliente->nombre . ' ' . substr($cliente->apellidos, 0, 1) . '.';
                        @endphp
                        <li class="relative">
                            <button id="user-menu" aria-haspopup="true" class="flex items-center text-sm font-medium text-gray-300 hover:text-white focus:outline-none focus:text-white">
                                <span>{{ $nombreCompleto }}</span>
                                <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 0 1 .707.293l4 4a1 1 0 0 1-1.414 1.414L11 6.414V14a1 1 0 1 1-2 0V6.414L6.707 8.707a1 1 0 1 1-1.414-1.414l4-4A1 1 0 0 1 10 3z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="user-menu-dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg overflow-hidden hidden">
                                <div class="py-1">
                                    <a href="{{ route('cliente.configuracion') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración de cuenta</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('usuarios.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar Sesión</a>
                                </div>
                            </div>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('usuarios.inicio_cliente') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
                <a href="{{ route('cliente.mascotas') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Mis Mascotas</a>
                <a href="{{ route('cliente.tienda') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tienda</a>
                <a href="{{ route('cliente.carrito') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Mi Carrito</a>
                @guest
                <a href="{{ route('usuarios.registrar') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Registrarse</a>
                <a href="{{ route('usuarios.inicio_sesion') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Iniciar Sesión</a>
                @else
                <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{ Auth::user()->name }}</a>
                <div class="group-hover:block z-50">
                    <a href="{{ route('cliente.configuracion') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Configuración de cuenta</a>
                    <a href="{{ route('usuarios.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-8 relative z-0">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
    <form id="logout-form" action="{{ route('usuarios.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>




    <script>
        // JavaScript para el dropdown del usuario
        document.addEventListener('DOMContentLoaded', function() {
            // Selector del botón de usuario
            const userMenuBtn = document.getElementById('user-menu');
            // Selector del menú desplegable del usuario
            const userMenuDropdown = document.getElementById('user-menu-dropdown');

            // Evento de clic en el botón de usuario
            userMenuBtn.addEventListener('click', function() {
                // Alternar la visibilidad del menú desplegable
                userMenuDropdown.classList.toggle('hidden');
            });

            // Cerrar el menú desplegable si se hace clic fuera de él
            window.addEventListener('click', function(event) {
                if (!userMenuBtn.contains(event.target)) {
                    userMenuDropdown.classList.add('hidden');
                }
            });
        });
    </script>
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
