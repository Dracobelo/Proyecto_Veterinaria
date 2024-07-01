@extends('cliente.layout')

@section('title', 'Inicio Cliente')

@section('content')

<div id="carousel" class="relative overflow-hidden w-full h-64 lg:h-screen z-0">
    <div class="relative w-full h-full">
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100" data-slide="1">
            <img src="https://i.postimg.cc/dtQFHqt2/slide1.jpg" alt="slide1" class="object-cover w-full h-full"/>
        </div>
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-slide="2">
            <img src="https://i.postimg.cc/GhMC6ZHZ/slide2.jpg" alt="slide2" class="object-cover w-full h-full">
        </div>
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-slide="3">
            <img src="https://i.postimg.cc/RZNBmXtq/slide3.jpg" alt="slide3" class="object-cover w-full h-full">
        </div>
    </div>

    <!-- Botones -->
    <div class="absolute inset-0 flex items-center justify-between px-4">
        <button id="prev" class="p-2 bg-white bg-opacity-50 rounded-full">
            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button id="next" class="p-2 bg-white bg-opacity-50 rounded-full">
            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>

<div class="jumbotron mt-5">
    <h1 class="display-4">Bienvenido, Cliente</h1>
    <p class="lead">Administra tus mascotas aquí.</p>
</div>

<script src="{{ asset('js/carrusel.js') }}"></script>
@endsection
