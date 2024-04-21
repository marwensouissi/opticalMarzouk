@extends('admin.master')

@section('content')
    @section('title', 'Solde Solaire')

    <style>
        /* Additional styles can be added here */
        .table th,
        .table td {
            text-align: center;
            vertical-align: middle; /* Align content vertically in the middle */
        }

        /* Increase the size of the checkboxes and align them vertically */
        .table td input[type="checkbox"] {
            width: 20px;
            height: 20px;
            vertical-align: middle; /* Align checkboxes vertically in the middle */
        }
    </style>

    <div class="row justify-content-end">
        <div class="col-md-3"> <!-- Adjust the column width as needed -->
            <form action="{{ route('Solairesearch') }}" method="GET" class="search-input">
                <div class="input-group p-2">
                    <input type="text" class="form-control" placeholder="Reference / Marque" name="search">
                    <button class="btn btn-outline-primary h-100" style="" type="submit"><i class="mdi mdi-magnify"></i> Search</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        <form action="{{ route('updateSoldeSolaire') }}" method="post">
            @csrf
            <div class="input-group p-2">
                <input type="number" name="solde_percentage" placeholder="Solde Percentage:" id="solde_percentage" min="0" max="100" required class="form-control mb-3">
                <button type="submit" class="btn btn-primary h-100 " style="background-color: #d4146799; border-color: #d4146799">Update Solde</button>
            </div>
    </div>

    <div class="table-responsive mx-3 mt-3">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Reference</th>
                    <th>Marque</th>
                    <th>Genre</th>
                    <th>Prix</th>
                    <th>solde</th>
                    <th>PrixSoldé</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach($lunettesSolaires as $lunetteSolaire)
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'even-row' : 'odd-row' }}">
                        <td>
                            <input type="checkbox" name="selected_products[]" value="{{ $lunetteSolaire->id }}" class="mx-3" >
                            @if($lunetteSolaire->cover)
                                <?php $coverImage = explode(',', $lunetteSolaire->cover); ?>
                                <img src="{{ asset('produit/solaires/' . $coverImage[0]) }}" alt="Cover Image" class="img-fluid rounded" style="width:100px">
                            @else
                                No Cover Image
                            @endif
                        </td>
                        <td>{{ $lunetteSolaire->reference }}</td>
                        <td>{{ $lunetteSolaire->marque }}</td>
                        <td>{{ $lunetteSolaire->genre }}</td>
                        <td>{{ $lunetteSolaire->prix }}</td>
                        <td>{{ $lunetteSolaire->solde }}</td>
                        <td>{{ $lunetteSolaire->prix - ($lunetteSolaire->prix * $lunetteSolaire->solde / 100) }}</td> <!-- Calculate prixSoldé -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</form>
@endsection
