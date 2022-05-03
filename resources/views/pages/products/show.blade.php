@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container flex justify-center">
        <section>
            <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Consulta de Producto {{$product->id}} </h2>

            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Nombre"
                name="name"
                value="{{ $product->name }}"
                readonly
            >
            <!-- descripcion -->
            <input
                type="textarea"
                class="my-2 w-full h-20 bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Descripcion"
                name="description"
                value="{{ $product->description }}"
                readonly
            >
            <!-- precio -->
            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Precio"
                name="price"
                value="{{ $product->price }}"
                readonly
            >

            <a
                href="{{ route('admin') }}"
                class="mt-4 w-full bg-indigo-500 text-white px-4 py-2 rounded-md drop-shadow-sm w-full hover:bg-indigo-600"
            >
                Volver
            </a>
        </section>
    </div>

@endsection
