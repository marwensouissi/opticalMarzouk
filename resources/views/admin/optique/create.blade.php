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
            <label for="aplique" class="form-label">Aplique:</label>
            <div>
                <input type="radio" id="avec_aplique" name="apl" value="1" {{ old('apl') == '1' ? 'checked' : '' }}>
                <label for="avec_aplique">Avec Aplique</label>
            </div>
            <div>
                <input type="radio" id="sans_aplique" name="apl" value="0" {{ old('apl', '0') == '0' ? 'checked' : '' }}>
                <label for="sans_aplique">Sans Aplique</label>
            </div>
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
            <label for="cover" class="form-label">Cover Image:</label>
            <input type="file" name="cover" id="cover" class="form-control">
            
            <!-- Image preview area for cover -->
            <div id="cover-preview" class="mt-2"></div>
        </div>
    
        <div class="mb-3">
            <label for="image" class="form-label">Other Images:</label>
            <input type="file" name="image[]" id="image" multiple class="form-control">
            
            <!-- Image preview area for other images -->
            <div id="image-preview" class="mt-2"></div>
        </div>
    
        <button type="submit" class="btn btn-success text-white" style="float: right">Ajouter LunetteOpt</button>
    
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
    
    </form>
  <!-- END: Content-->

  @endsection