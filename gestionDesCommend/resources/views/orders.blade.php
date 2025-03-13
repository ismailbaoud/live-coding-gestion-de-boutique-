@extends('layouts.base')

@section('main')
    <h1>Orders</h1>
    <a name="" id="" class="btn btn-primary" href="/orders/create" role="button">add order</a>

    <table class="table">
        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Status</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}">View</a>
                </td>
                <td>
                    <a href="{{ route('orders.show', $order->id .'/edit') }}">edit</a>
                </td>
                <td>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </table>
@endsection
