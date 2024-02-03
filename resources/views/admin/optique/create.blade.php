@extends('admin.master')

@section('content')
@section('title', 'Optique-Ajout')

<div class="container mt-5 w-100" >
    <h2 class="mb-4">Ajouter Lunette Optique</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('lunetteopt.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Other form fields (customize according to your requirements) -->
        <div class="mb-3">
            <label for="reference" class="form-label">Référence:</label>
            <input type="text" class="form-control" id="reference" name="reference" required>
        </div>

        <div class="mb-3">
            <label for="marque" class="form-label">Marque:</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix:</label>
            <input type="number" class="form-control" id="prix" name="prix" required>
        </div>

        <div class="mb-3">
            <label for="type_monture" class="form-label">Type Monture:</label>
            <input type="text" class="form-control" id="type_monture" name="type_monture" required>
        </div>

        <div class="mb-3">
            <label for="matiere_monture" class="form-label">Matière Monture:</label>
            <input type="text" class="form-control" id="matiere_monture" name="matiere_monture" required>
        </div>

        <div class="mb-3">
            <label for="couleur" class="form-label">Couleur:</label>
            <input type="text" class="form-control" id="couleur" name="couleur" required>
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" name="image[]" id="image" multiple class="form-control">

            <!-- Image preview area -->


        <button type="submit" class="btn btn-success text-white" style="float: right">Ajouter LunetteOpt</button>
    </form>
</div>

<script>
    // JavaScript to handle image preview
    window.addEventListener('load', function() {
        const previewArea = document.getElementById('image-preview');
        const imageInput = document.getElementById('image');

        imageInput.addEventListener('change', function(event) { 
            const files = event.target.files;

            // Clear previous previews if any
            previewArea.innerHTML = '';

            // Display new previews
            for (const file of files) {
                const image = document.createElement('img');
                image.src = URL.createObjectURL(file);
                image.style.width = '150px';
                image.style.marginRight = '2px';
                image.style.marginBottom = '2px';
                previewArea.appendChild(image);
            }
        });
    });
</script>

  <!-- END: Content-->

  @endsection