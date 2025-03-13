@extends('layouts.base')

@section('main')
    <a name="" id="" class="btn btn-primary" href="/orders" role="button">back</a>

    <h1>Order Details</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Customer: {{ $order->customer_name }}</p>
    <p>Status: {{ $order->status }}</p>
    <p>Total Price: {{ $order->total_price }}</p>
@endsection
