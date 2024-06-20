@extends('master.front')

@section('title', 'OpticalMarzouk')

@section('welcome')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $product->reference }}</h2>
            <p class="card-text">{{ $product->marque }}</p>
            <p class="card-text">Price: {{ $product->prix }}</p>
            @if ($type === 'lunettesOptiques')
                <p class="card-text">Type Monture: {{ $product->type_monture }}</p>
            @elseif ($type === 'montres')
                <!-- Display specific fields for Montre -->
            @elseif ($type === 'lunettesSolaires')
                <p class="card-text">Type Monture: {{ $product->type_monture }}</p>
                <p class="card-text">Couleur Verre: {{ $product->couleur_verre }}</p>
            @endif

            <form action="{{ route('products.addToCart', ['type' => $type, 'id' => $product->id]) }}" method="POST">
                @csrf
                <!-- Optionally, you can include more details or options here -->
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Add any page-specific scripts here -->
<script>
// Page-specific JavaScript
</script>
@endsection
