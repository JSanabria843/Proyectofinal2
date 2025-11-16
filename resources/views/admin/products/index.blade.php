@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<h2>Listado de Productos</h2>

<a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ Crear producto</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>Q {{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning">Editar</a>

                <form action="{{ route('admin.products.destroy', $product) }}" 
                      method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No hay productos.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
