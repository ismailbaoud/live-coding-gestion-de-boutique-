@extends('layouts.base')

@section('main')
    <h1>Make an Order</h1>
    <a name="" id="" class="btn btn-primary" href="/orders" role="button">Button</a>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="text" name="customer_name" placeholder="Customer Name" required>
        <label>Select Products:</label>
        <select name="product" id="">
            @foreach ($products as $product)
                <option value="{{ $product->id }}"> {{ $product->name }}
                    {{ $product->price }}
            @endforeach
        </select>

        <input type="number" name="stock" placeholder="stock number">

        <button type="submit">Place Order</button>
    </form>
@endsection
