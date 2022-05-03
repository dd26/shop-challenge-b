@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h2 class="text-2xl text-center py-4 mb-4 font-semibold">Lista de Productos</h2>
<!-- Btn Agregar -->
@if ($data['route'] == 'admin')
    <div class="flex justify-end mb-2">
        <a href="{{ route('products.create') }}" class="bg-indigo-500 text-white px-3 py-3 rounded-sm rounded-lg drop-shadow-sm">
            Crear Nuevo Producto
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endif
<table class="table-fixed w-full">
    <thead>
        <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/16 py-4 ...">Nombre</th>
            <th class="w-1/2 py-4 ...">Descripcion</th>
            <th class="w-1/16 py-4 ...">Precio</th>
            @if ($data['route'] == 'admin')
                <th class="w-40 py-4 ...">Acciones</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($data['products'] as $product)
            <tr>
                <td class="py-3 px-6 text-center">{{$product->id}}</td>
                <td class="p-3 text-center">{{$product->name}}</td>
                <td class="p-3 text-center">{{$product->description}}</td>
                <td class="p-3 text-center">{{ $product->price }}</td>
                @if ($data['route'] == 'admin')
                    <td class="p-3 flex justify-center">
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 text-white px-3 py-3 rounded-sm rounded-lg drop-shadow-sm">
                                <i class="fas fa-trash"></i></button>
                            </button>
                        </form>
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-3 py-3 ml-2 rounded-sm rounded-lg drop-shadow-sm">
                            <i class="fas fa-pen"></i></a>
                        </a>
                        <a href="{{ route('products.show', $product->id) }}" class="bg-indigo-500 text-white px-3 py-3 ml-2 rounded-sm rounded-lg drop-shadow-sm">
                            <i class="fas fa-solid fa-eye"></i>
                        </a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
