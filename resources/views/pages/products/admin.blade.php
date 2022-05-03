@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="py-10 text-xl">Lista de Productos</div>
<table class="table-fixed w-full shadow-sm">
    <thead>
        <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/16 py-4 ...">Nombre</th>
            <th class="w-1/2 py-4 ...">Descripcion</th>
            <th class="w-1/16 py-4 ...">Precio</th>
            {{-- <th class="w-40 py-4 ...">Acciones</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td class="py-3 px-6 text-center">{{$product->id}}</td>
                <td class="p-3 text-center">{{$product->name}}</td>
                <td class="p-3 text-center">{{$product->description}}</td>
                <td class="p-3 text-center">{{ $product->price }}</td>
                <td class="p-3 flex justify-center">
                    <button class="bg-red-500 text-white px-3 py-3 rounded-sm rounded-lg drop-shadow-sm">
                        <i class="fas fa-trash"></i></button>
                    </button>
                    <button class="bg-blue-500 text-white px-3 py-3 ml-2 rounded-sm rounded-lg drop-shadow-sm">
                        <i class="fas fa-pen"></i></button>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
