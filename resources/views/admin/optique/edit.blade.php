<!-- resources/views/admin/optique/edit.blade.php -->

@extends('admin.master')

@section('content')
@section('title', 'Optique')

    <div class="container">
        <h2>Edit Lunette Optiqiue</h2>

        <!-- Display validation errors here if needed -->

<form action="{{ route('lunetteopt.update', ['lunetteopt' => $lunetteOpt->id]) }}" method="post" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            <!-- Input fields for editing data -->
            <div class="mb-3">
                <label for="reference" class="form-label">Référence:</label>
                <input type="text" class="form-control" id="reference" name="reference" value="{{ old('reference', $lunetteOpt->reference) }}" required>
            </div>

            <div class="mb-3">
                <label for="etat" class="form-label">Etat:</label>
                <select name="etat" id="etat" class="form-control" required>
                    <option value="0" {{ old('etat', $lunetteOpt->etat) == '0' ? 'selected' : '' }}>En Stock</option>
                    <option value="1" {{ old('etat', $lunetteOpt->etat) == '1' ? 'selected' : '' }}>Vendu</option>
                </select>
            </div>
    
            <div class="mb-3">
                <label for="marque" class="form-label">Marque:</label>
                <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque', $lunetteOpt->marque) }}" required>
            </div>
    
            <div class="mb-3">
                <label for="prix" class="form-label">Prix:</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $lunetteOpt->prix) }}" required>
            </div>
            <div class="mb-3">
                <label for="aplique" class="form-label">Aplique:</label>
                <div>
                    <input type="radio" id="avec_aplique" name="apl" value="1" {{ old('apl', $lunetteOpt->apl) == '1' ? 'checked' : '' }}>
                    <label for="avec_aplique">Avec Aplique</label>
                </div>
                <div>
                    <input type="radio" id="sans_aplique" name="apl" value="0" {{ old('apl', $lunetteOpt->apl) == '0' ? 'checked' : '' }}>
                    <label for="sans_aplique">Sans Aplique</label>
                </div>
            </div>
            
    
            <div class="mb-3">
                <label for="type_monture" class="form-label">Type Monture:</label>
                <input type="text" class="form-control" id="type_monture" name="type_monture" value="{{ old('type_monture', $lunetteOpt->type_monture) }}" required>
            </div>
    
            <div class="mb-3">
                <label for="matiere_monture" class="form-label">Matière Monture:</label>
                <input type="text" class="form-control" id="matiere_monture" name="matiere_monture" value="{{ old('matiere_monture', $lunetteOpt->matiere_monture) }}" required>
            </div>
    
            <div class="mb-3">
                <label for="couleur" class="form-label">Couleur:</label>
                <input type="text" class="form-control" id="couleur" name="couleur" value="{{ old('couleur', $lunetteOpt->couleur) }}" required>
            </div>
    

            <div class="mb-3">
                <label for="cover" class="form-label">Cover Image:</label>
                <input type="file" name="cover" id="cover" class="form-control">

                <!-- Cover image preview area -->
                <div id="cover-preview" class="mt-2">
                    @if($lunetteOpt->cover)
                        <img src="{{ asset('produit/optique/' . $lunetteOpt->cover) }}" alt="Cover Image" style="width: 150px; margin-right: 2px; margin-bottom: 2px;">
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
                    @foreach(explode(',', $lunetteOpt->image) as $image)
                        <img src="{{ asset('produit/optique/' . $image) }}" alt="Image" style="width: 150px; margin-right: 2px; margin-bottom: 2px;">
                    @endforeach
                </div>
            </div>
    
            <button type="submit" class="btn btn-success text-white" style="float: right">Modifier LunetteOpt</button>
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
        </form>
    </div>
@endsection
