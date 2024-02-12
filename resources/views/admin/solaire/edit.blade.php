<!-- resources/views/admin/solaire/edit.blade.php -->

@extends('admin.master')

@section('content')
@section('title', 'solaire')

<div class="container">
    <h2>Edit Lunette Solaire</h2>

    <!-- Display validation errors here if needed -->
    <form action="{{ route('lunettesol.update', ['lunettesol' => $lunetteSol->id]) }}" method="post" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')

        <!-- Input fields for editing data -->
        <div class="mb-3">
            <label for="reference" class="form-label">Référence:</label>
            <input type="text" class="form-control" id="reference" name="reference" value="{{ old('reference', $lunetteSol->reference) }}" required>
        </div>

        <div class="mb-3">
            <label for="etat" class="form-label">Etat:</label>
            <select name="etat" id="etat" class="form-control" required>
                <option value="0" {{ old('etat', $lunetteSol->etat) == '0' ? 'selected' : '' }}>En Stock</option>
                <option value="1" {{ old('etat', $lunetteSol->etat) == '1' ? 'selected' : '' }}>Vendu</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="marque" class="form-label">Marque:</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque', $lunetteSol->marque) }}" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre:</label>
            <div>
                <input type="radio" id="genre_homme" name="genre" value="Homme" {{ (old('genre', $lunetteSol->genre) == 'Homme') ? 'checked' : '' }}>
                <label for="genre_homme">Homme</label>
            </div>
            <div>
                <input type="radio" id="genre_femme" name="genre" value="Femme" {{ (old('genre', $lunetteSol->genre) == 'Femme') ? 'checked' : '' }}>
                <label for="genre_femme">Femme</label>
            </div>
            <div>
                <input type="radio" id="genre_les_deux" name="genre" value="Les Deux" {{ (old('genre', $lunetteSol->genre) == 'Les Deux') ? 'checked' : '' }}>
                <label for="genre_les_deux">Les deux </label>
            </div>
            <div>
                <input type="radio" id="genre_enfant" name="genre" value="enfant" {{ (old('genre', $lunetteSol->genre) == 'enfant') ? 'checked' : '' }}>
                <label for="genre_enfant">Enfant </label>
            </div>
        </div>
        

        <div class="mb-3">
            <label for="prix" class="form-label">Prix:</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $lunetteSol->prix) }}" required>
        </div>


        <div class="mb-3">
            <label for="type_monture" class="form-label">Type Monture:</label>
            <input type="text" class="form-control" id="type_monture" name="type_monture" value="{{ old('type_monture', $lunetteSol->type_monture) }}" required>
        </div>

        <div class="mb-3">
            <label for="matiere_monture" class="form-label">Matière Monture:</label>
            <input type="text" class="form-control" id="matiere_monture" name="matiere_monture" value="{{ old('matiere_monture', $lunetteSol->matiere_monture) }}" required>
        </div>

        <div class="mb-3">
            <label for="couleur" class="form-label">Couleur:</label>
            <input type="text" class="form-control" id="couleur" name="couleur" value="{{ old('couleur', $lunetteSol->couleur) }}" required>
        </div>

        <!-- Add new fields for lunetteSolaire model -->
        <div class="mb-3">
            <label for="adaptable" class="form-label">Adaptable:</label>
            <div>
                <input type="radio" id="adaptable_no" name="adaptable" value="0" {{ old('adaptable', $lunetteSol->adaptable) == '0' ? 'checked' : '' }}>
                <label for="adaptable_no">Non</label>
            </div>
            <div>
                <input type="radio" id="adaptable_yes" name="adaptable" value="1" {{ old('adaptable', $lunetteSol->adaptable) == '1' ? 'checked' : '' }}>
                <label for="adaptable_yes">Oui</label>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="couleur_verre" class="form-label">Couleur Verre:</label>
            <input type="text" class="form-control" id="couleur_verre" name="couleur_verre" value="{{ old('couleur_verre', $lunetteSol->couleur_verre) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="verre_polarise" class="form-label">Verre Polarise:</label>
            <div>
                <input type="radio" id="verre_polarise_no" name="verre_polarise" value="0" {{ old('verre_polarise', $lunetteSol->verre_polarise) == '0' ? 'checked' : '' }}>
                <label for="verre_polarise_no">Non</label>
            </div>
            <div>
                <input type="radio" id="verre_polarise_yes" name="verre_polarise" value="1" {{ old('verre_polarise', $lunetteSol->verre_polarise) == '1' ? 'checked' : '' }}>
                <label for="verre_polarise_yes">Oui</label>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="verre_degrade" class="form-label">Verre Degrade:</label>
            <div>
                <input type="radio" id="verre_degrade_no" name="verre_degrade" value="0" {{ old('verre_degrade', $lunetteSol->verre_degrade) == '0' ? 'checked' : '' }}>
                <label for="verre_degrade_no">Non</label>
            </div>
            <div>
                <input type="radio" id="verre_degrade_yes" name="verre_degrade" value="1" {{ old('verre_degrade', $lunetteSol->verre_degrade) == '1' ? 'checked' : '' }}>
                <label for="verre_degrade_yes">Oui</label>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="verre_miroirs" class="form-label">Verre Miroirs:</label>
            <div>
                <input type="radio" id="verre_miroirs_no" name="verre_miroirs" value="0" {{ old('verre_miroirs', $lunetteSol->verre_miroirs) == '0' ? 'checked' : '' }}>
                <label for="verre_miroirs_no">Non</label>
            </div>
            <div>
                <input type="radio" id="verre_miroirs_yes" name="verre_miroirs" value="1" {{ old('verre_miroirs', $lunetteSol->verre_miroirs) == '1' ? 'checked' : '' }}>
                <label for="verre_miroirs_yes">Oui</label>
            </div>
        </div>
        

        <div class="mb-3">
            <label for="cover" class="form-label">Cover Image:</label>
            <input type="file" name="cover" id="cover" class="form-control">

            <!-- Cover image preview area -->
            <div id="cover-preview" class="mt-2">
                @if($lunetteSol->cover)
                <img src="{{ asset('produit/solaires/' . $lunetteSol->cover) }}" alt="Cover Image" style="width: 150px; margin-right: 2px; margin-bottom: 2px;">
                @else
                No Cover Image
                @endif
            </div>
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Images:</label>
            <input type="file" name="image[]" id="image" multiple class="form-control">

            <!-- Image preview area -->
            <div id="image-preview" class="mt-2">
                @foreach(explode(',', $lunetteSol->image) as $image)
                <img src="{{ asset('produit/solaires/' . $image) }}" alt="Image" style="width: 150px; margin-right: 2px; margin-bottom: 2px;">
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success text-white" style="float: right">Modifier lunetteSol</button>
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
