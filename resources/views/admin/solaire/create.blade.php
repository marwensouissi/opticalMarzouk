<!-- resources/views/admin/Solaire/create.blade.php -->

@extends('admin.master')

@section('content')
@section('title', 'Solaire')

<div class="container">
    <h2>Ajouter Lunette Solaire</h2>

    <!-- Display validation errors here if needed -->

    <form action="{{ route('lunettesol.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <!-- Input fields for creating new data -->
        <div class="mb-3">
            <label for="reference" class="form-label">Référence:</label>
            <input type="text" class="form-control" id="reference" name="reference" value="{{ old('reference') }}" required>
        </div>



        <div class="mb-3">
            <label for="marque" class="form-label">Marque:</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque') }}" required>
        </div>
        <!-- Verre Polarise -->
        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <div>
                <input type="radio" id="homme" name="genre" value="Homme" {{ old('genre') == 'Homme' ? 'checked' : '' }}>
                <label for="homme">Homme</label>
            </div>
            <div>
                <input type="radio" id="femme" name="genre" value="Femme" {{ old('genre') == 'Femme' ? 'checked' : '' }}>
                <label for="femme">Femme</label>
            </div>
        
            <div>
                <input type="radio" id="les_deux" name="genre" value="Les Deux" {{ old('genre') == 'Les Deux' ? 'checked' : '' }}>
                <label for="les_deux">Les deux</label>
            </div>
            <div>
                <input type="radio" id="enfant" name="genre" value="enfant" {{ old('genre') == 'enfant' ? 'checked' : '' }}>
                <label for="enfant">Enfant</label>
            </div>
        </div>
        





        <div class="mb-3">
            <label for="prix" class="form-label">Prix:</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix') }}" required>
        </div>



        <div class="mb-3">
            <label for="type_monture" class="form-label">Type Monture:</label>
            <input type="text" class="form-control" id="type_monture" name="type_monture" value="{{ old('type_monture') }}" required>
        </div>

        <div class="mb-3">
            <label for="matiere_monture" class="form-label">Matière Monture:</label>
            <input type="text" class="form-control" id="matiere_monture" name="matiere_monture" value="{{ old('matiere_monture') }}" required>
        </div>

        <div class="mb-3">
            <label for="couleur" class="form-label">Couleur:</label>
            <input type="text" class="form-control" id="couleur" name="couleur" value="{{ old('couleur') }}" required>
        </div>



<!-- Couleur Verre -->
<div class="mb-3">
    <label for="couleur_verre" class="form-label">Couleur Verre:</label>
    <input type="text" class="form-control" id="couleur_verre" name="couleur_verre" value="{{ old('couleur_verre') }}" required>
</div>

<!-- Verre Polarise -->
<div class="mb-3">
    <label for="verre_polarise" class="form-label">Verre Polarise:</label>
    <div>
        <input type="radio" id="verre_polarise_non" name="verre_polarise" value="0" {{ old('verre_polarise') == '0' ? 'checked' : '' }}>
        <label for="verre_polarise_non">Non</label>
    </div>
    <div>
        <input type="radio" id="verre_polarise_oui" name="verre_polarise" value="1" {{ old('verre_polarise') == '1' ? 'checked' : '' }}>
        <label for="verre_polarise_oui">Oui</label>
    </div>
</div>

<!-- Verre Degrade -->
<div class="mb-3">
    <label for="verre_degrade" class="form-label">Verre Degrade:</label>
    <div>
        <input type="radio" id="verre_degrade_non" name="verre_degrade" value="0" {{ old('verre_degrade') == '0' ? 'checked' : '' }}>
        <label for="verre_degrade_non">Non</label>
    </div>
    <div>
        <input type="radio" id="verre_degrade_oui" name="verre_degrade" value="1" {{ old('verre_degrade') == '1' ? 'checked' : '' }}>
        <label for="verre_degrade_oui">Oui</label>
    </div>
</div>

<!-- Verre Miroirs -->
<div class="mb-3">
    <label for="verre_miroirs" class="form-label">Verre Miroirs:</label>
    <div>
        <input type="radio" id="verre_miroirs_non" name="verre_miroirs" value="0" {{ old('verre_miroirs') == '0' ? 'checked' : '' }}>
        <label for="verre_miroirs_non">Non</label>
    </div>
    <div>
        <input type="radio" id="verre_miroirs_oui" name="verre_miroirs" value="1" {{ old('verre_miroirs') == '1' ? 'checked' : '' }}>
        <label for="verre_miroirs_oui">Oui</label>
    </div>
</div>
<!-- Adaptable -->
<div class="mb-3">
    <label for="adaptable" class="form-label">Adaptable:</label>
    <div>
        <input type="radio" id="adaptable_non" name="adaptable" value="0" {{ old('adaptable') == '0' ? 'checked' : '' }}>
        <label for="adaptable_non">Non</label>
    </div>
    <div>
        <input type="radio" id="adaptable_oui" name="adaptable" value="1" {{ old('adaptable') == '1' ? 'checked' : '' }}>
        <label for="adaptable_oui">Oui</label>
    </div>
</div>

        <div class="mb-3">
            <label for="cover" class="form-label">Cover Image:</label>
            <input type="file" name="cover" id="cover" class="form-control">

            <!-- Cover image preview area -->
            <div id="cover-preview" class="mt-2"></div>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Images:</label>
            <input type="file" name="image[]" id="image" multiple class="form-control">

            <!-- Image preview area -->
            <div id="image-preview" class="mt-2"></div>
        </div>

        <button type="submit" class="btn btn-success text-white" style="float: right">Ajouter Lunette Solaire</button>
    </form>
</div>

<script>
    // JavaScript to handle image preview for cover
    window.addEventListener('load', function () {
        const coverPreviewArea = document.getElementById('cover-preview');
        const coverInput = document.getElementById('cover');

        coverInput.addEventListener('change', function () {
            handleImageChange(coverInput, coverPreviewArea);
        });
    });

    // JavaScript to handle image preview for other images
    window.addEventListener('load', function () {
        const imagePreviewArea = document.getElementById('image-preview');
        const imageInput = document.getElementById('image');

        imageInput.addEventListener('change', function () {
            handleImageChange(imageInput, imagePreviewArea);
        });
    });

    function handleImageChange(input, previewArea) {
        const files = input.files;

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
    }
</script>
@endsection
