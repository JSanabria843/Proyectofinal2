@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
<h2>Editar Producto</h2>

<form action="{{ route('admin.products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>

    <label>Precio:</label>
    <input type="number" name="price" value="{{ $product->price }}" required>

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ $product->stock }}" required>

    <br><br>

    <button class="btn btn-success">Actualizar</button>
</form>
@endsection
