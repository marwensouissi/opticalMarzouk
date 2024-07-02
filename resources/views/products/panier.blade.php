@extends('master.front')

@section('title', 'Shopping Cart')

@section('welcome')

<div class="container mt-100 mb-100">
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td> 
                        <div class="product-info"> 
                            <img src="{{ asset($item->attributes->image) }}" alt="{{ $item->name }}" width="30%">
                            <span>{{ $item->name }}</span>
                        </div>
                    </td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price }}</td>
                    <td>
                        <form action="{{ route('cart.removeItem', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('cart.clear') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-warning">Clear Cart</button>
    </form>
</div>
@endsection
