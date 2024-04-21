@extends('admin.master')

@section('content')
@section('title', 'Solde')

<style>
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        transition: transform 0.3s ease-in-out;
        height: 80vh; /* Set height to 80% of viewport height */
    }

    .image-container:hover {
        transform: scale(1.1); /* Adjust the scale factor for the desired zoom level */
    }

    .image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('\produit\solde\opt.jpg') center center / cover no-repeat; /* Use the path to the image */
        filter: blur(10px); /* Adjust the blur amount */
        z-index: -1;
    }

    .image-container a {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90%;
        text-align: center;
        color: white; /* Set text color */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
        background-color: #ead1d1
        
        /* Optional text shadow for better visibility */
    }

    .image-container img {
        width: 70%;
        height: 30%;
        object-fit: cover; /* Use cover to maintain aspect ratio and cover the container */
        border-radius: 40px;
    }
</style>

<div class="row row-cols-3 g-2 gx-2 align-items-center mt-5">
    <div class="col-4 ">
        <div class="image-container">
            <a href="/my_admin/optique/solde" data-toggle="tooltip" title="Solde lunette Optique">
                <img src="\produit\solde\opp.png" alt="" class="img-fluid" id="image1">
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="image-container" >
            <a href="/my_admin/solaire/solde" data-toggle="tooltip" title="Solde lunette Solaire">
                <img src="\produit\solde\sungl.png" alt="" class="img-fluid" id="image2">
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="image-container ">
            <a href="/my_admin/montre/solde" data-toggle="tooltip" title="Solde Montre">
                <img src="\produit\solde\montr.png" alt="" class="img-fluid" id="image3" style="height:58%">
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>

@endsection
