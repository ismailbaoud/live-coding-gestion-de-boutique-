@extends('layouts.base')
@section('main')
    <h1>Product Details</h1>
    <p>Name: {{ $product->name }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Description: {{ $product->description }}</p>
    <a href="{{ route('products.index') }}">Back to Products</a>
@endsection