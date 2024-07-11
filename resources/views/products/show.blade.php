@extends('master.front')

@section('title', 'OpticalMarzouk')

@section('welcome')
<style>
    /* Container for the zoomed image */
    .zoom-container {
        position: relative;
        overflow: hidden;
        cursor: zoom-in;
    }
    
    /* The image itself */
    .zoom-image {
        transition: transform 0.2s ease;
    }
    
    /* Zoomed image on hover */
    .zoom-container:hover .zoom-image {
        transform: scale(1.5);
    }
    </style>
    
    <div class="container" style="margin-top: 70px; margin-bottom: 100px">
        <div class="row">
            <div class="col-md-6">
                <div class="card zoom-container">
                    <img id="mainImage" src="{{ asset($imagePath) }}" class="card-img zoom-image" alt="{{ $product->reference }}">
                </div>
                <div class="mt-3">
                    @foreach ($additionalImagesPaths as $path)
                        <img src="{{ asset($path) }}" class="img-thumbnail" style="width: 100px; height: 100px; object-fit: cover;" alt="Additional Image" onclick="changeMainImage('{{ asset($path) }}')">
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
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
        </div>
    </div>
    
    <script>
    function changeMainImage(src) {
        document.getElementById('mainImage').src = src;
    }
    
    document.querySelector('.zoom-container').addEventListener('mousemove', function(e) {
        const zoomer = e.currentTarget;
        const zoomImage = zoomer.querySelector('.zoom-image');
        const offsetX = e.offsetX;
        const offsetY = e.offsetY;
        const xPercent = (offsetX / zoomer.offsetWidth) * 100;
        const yPercent = (offsetY / zoomer.offsetHeight) * 100;
        
        zoomImage.style.transformOrigin = `${xPercent}% ${yPercent}%`;
    });
    </script>
    
@endsection
