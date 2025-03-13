@extends('layouts.base')

@section('main')
    <h1>Edit Product</h1>
    <a name="" id="" class="btn btn-primary" href="/orders" role="button">back</a>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <bs5-h1>actual status</bs5-h1>
        <span>{{ $order->status }}</span>
        <div class="mb-3">
            <label for="" class="form-label">status</label>
            <select class="form-select form-select-lg" name="status" id="">
                <option selected>select status</option>
                <option value="en attent">en attent</option>
                <option value="en coure">en coure</option>
                <option value="livre">livre</option>
            </select>
        </div>

        <button type="submit">Update Product</button>
    </form>
@endsection
