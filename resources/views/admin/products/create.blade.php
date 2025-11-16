@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<h2>Crear Producto</h2>

<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf

    <label>Nombre del producto</label>
    <input type="text" name="name" required class="form-control">

    <label>Descripción</label>
    <textarea name="description" class="form-control"></textarea>

    <label>Precio</label>
    <input type="number" step="0.01" name="price" required class="form-control">

    <label>Stock</label>
    <input type="number" name="stock" class="form-control">

    <label>Imagen (URL)</label>
    <input type="url" name="image_url" class="form-control">

    <button type="submit" class="btn btn-primary mt-3">
        Guardar Producto
    </button>
</form>

@endsection
