@extends('layouts.app')

@section('title', 'Update')

@section('content')

    <div class="container flex justify-center">
        <form
            action="{{ route('products.update', $product->id) }}"
            method="POST"
            class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg"
        >
            @csrf
            @method('PUT')
            <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Editar Producto {{$product->id}} </h2>

            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Nombre"
                name="name"
                value="{{ $product->name }}"
            >

            <input
                type="textarea"
                class="my-2 w-full h-20 bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Descripcion"
                name="description"
                value="{{ $product->description }}"
            >

            <input
                type="text"
                class="my-2 w-full bg-gray-200 p-2 text-lg rounded-sm placeholder-gray-500"
                placeholder="Precio"
                name="price"
                value="{{ $product->price }}"
            >

            <button
                type="submit"
                class="my-2 w-full bg-indigo-500 text-white px-4 py-2 rounded-md drop-shadow-sm w-full hover:bg-indigo-600"
            >
                Guardar
            </button>

        </form>
    </div>

@endsection
