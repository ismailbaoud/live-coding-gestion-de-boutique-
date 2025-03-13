@extends('layouts.base')

@section('main')
    <h1>Products</h1>
    <a href="/products/create" class="btn btn-primary m-5">Add Product</a>
    <a href="/orders" class="btn btn-warning m-5">orders</a>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                   
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection