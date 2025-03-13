@extends('layouts.base')

@section('main')
    <h1>Add Product</h1>
    <a href="/products" class="btn btn-primary">back</a>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name" >
        <input type="text" name="description" placeholder="description" >
        <input type="number" name="price" placeholder="Price" step="0.01" >
        <input type="number" name="stock" placeholder="stock" >
        <button type="submit">Add Product</button>
    </form>
@endsection