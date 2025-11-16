@extends('layouts.app')
@section('title','Productos')

@section('content')
<h1>Productos</h1>
<div class="grid">
  @foreach($products as $p)
    <div class="card product">
      @if($p->image_url)
        <img src="{{ $p->image_url }}" alt="{{ $p->name }}">
      @endif
      <h3>{{ $p->name }}</h3>
      <p>{{ Str::limit($p->description, 100) }}</p>
      <div class="meta">
        <span>${{ number_format($p->price,2) }}</span>
        <span>Stock: {{ $p->stock }}</span>
      </div>
    </div>
  @endforeach
</div>

{{ $products->links() }}
@endsection
