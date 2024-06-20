
@extends('master.front')

@section('welcome')

<div class="container">
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>

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
