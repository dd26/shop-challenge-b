@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container flex justify-center">
        <form
            action="{{ route('products.store') }}"
            method="POST"
            class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg"
        >
            @csrf
            <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Crear Producto</h2>

            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Nombre"
                name="name"
            >
            <!-- descripcion -->
            <input
                type="textarea"
                class="my-2 w-full h-20 bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Descripcion"
                name="description"
            >
            <!-- precio -->
            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Precio"
                name="price"
            >

            <button
                type="submit"
                class="my-2 w-full bg-indigo-500 text-white px-4 py-2 rounded-md drop-shadow-sm w-full hover:bg-indigo-600"
            >
                Crear Producto
                <i class="fas fa-solid fa-plus"></i>
            </button>

        </form>
    </div>

@endsection
