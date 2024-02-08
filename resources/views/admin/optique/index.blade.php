@extends('admin.master')

@section('content')
@section('title', 'Optique')

<style>
  .table td {
      vertical-align: middle;
      max-width: 200px;
      overflow: hidden;
      white-space: normal;
      word-wrap: break-word;
      padding: 10px; /* Set a fixed padding for consistent spacing */
  }
  .btn-outline-primary {
    color: #e15385;
    border-color: #e15385;
}

  .table img {
    border-radius: 15px;
}

/* Bootstrap responsiveness classes */
@media (max-width: 575.98px) {
    .table img {
        max-width: 100px;
        height: auto;
    }
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .table img {
        max-width: 100px;
        height: auto;
    }
}

@media (min-width: 768px) and (max-width: 991.98px) {
    .table img {
        max-width: 160px;
        height: 160px;
    }
}

@media (min-width: 992px) and (max-width: 1199.98px) {
    .table img {
        max-width: 160px;
        height: 160px;
    }
}

@media (min-width: 1200px) {
    .table img {
        max-width: 160px;
        height: 160px;
    }
}


  .btn-action {
      margin-right: 5px;
  }

  /* Set the max-width for the table */
  .table-responsive {
      max-width: 95%;
      overflow-x: auto;
  }
  .search-input {
      max-width: 350px;
      margin-bottom: 10px;
  }

</style>

<div style="margin-left: -50px">

    <div class="d-flex  align-items-center mx-5 mt-4">
    <div>
        <h4 class="mr-2 p-2" style="font-family: sans-serif">Liste Des Lunettes</h4>
    </div>
    <div class="p-2">
        <!-- Add the search form here -->
        <form action="{{ route('lunetteopt.search') }}" method="GET" class="search-input ">
            <div class="input-group p-2">
                <input type="text" class="form-control" placeholder="Reference / Marque" name="search">
                <button class="btn btn-outline-primary " type="submit"> <i class="mdi mdi-magnify "></i> Search</button>
            </div>
        </form>
    </div>
    <div class="card-description ml-auto p-2">
        <p >
            <a href="{{ route('lunetteopt.create') }}" class="btn btn-success text-white" style="background-color: #ff7d7d ; border-color:transparent"> <i  class="mdi mdi-library-plus "></i>  Ajouter Lunette </a>
        </p>
    </div>    




    </div>
</div>

<div class="table-responsive mx-3 mt-3 ">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Reference</th>
                <th>Prix</th>
                <th>Type </th>
                <th>Matiere </th>
                <th>Couleur</th>
                <th>Aplique</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lunettesOptiques as $lunetteOpt)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even-row' : 'odd-row' }}">
                    <td>
                        @if($lunetteOpt->cover)
                            <?php $coverImage = explode(',', $lunetteOpt->cover); ?>
                            <img src="{{ asset('produit/optique/' . $coverImage[0]) }}" alt="Cover Image" class="img-fluid rounded">
                            @else
                            No Cover Image
                        @endif
                    </td>
                    <td>{{ $lunetteOpt->reference }}</td>
                    <td>{{ $lunetteOpt->marque }}</td>
                    <td>{{ $lunetteOpt->prix }}</td>
                    <td>{{ $lunetteOpt->type_monture }}</td>
                    <td>{{ $lunetteOpt->matiere_monture }}</td>
                    <td>{{ $lunetteOpt->couleur }}</td>
                    <td>
                        @if($lunetteOpt->apl === 0)
                            Sans Aplique
                        @elseif($lunetteOpt->apl === 1)
                            Avec Aplique
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        @if($lunetteOpt->etat === 0)
                            En stock
                        @elseif($lunetteOpt->etat === 1)
                            Vendu
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        <!-- Update button -->
                        <a href="{{ route('lunetteopt.edit', $lunetteOpt->id) }}" class="btn btn-warning btn-action text-white" style="background-color: #ff7d7d; border-color:transparent;"><i class="mdi mdi-wrench"></i></a>

                        <!-- Delete button (You may want to add a confirmation dialog for deletion) -->
                        <form action="{{ route('lunetteopt.destroy', $lunetteOpt->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Vous êtes Sure de Supprimer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action text-white "><i class="mdi mdi-delete-forever"></i></button>
                        </form>

                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<!-- END: Content-->
@endsection
