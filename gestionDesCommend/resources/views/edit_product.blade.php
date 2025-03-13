@extends('layouts.base')

@section('main')
    <h1>Edit Product</h1>
    <a name="" id="" class="btn btn-primary" href="/products" role="button">back</a>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <input type="text" name="description" value="{{ $product->description }}" required>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>
        <input type="number" name="stock" value="{{ $product->stock }}" required>
        <button type="submit">Update Product</button>
    </form>
@endsection
