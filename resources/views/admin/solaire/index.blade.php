@extends('admin.master')

@section('content')
@section('title', 'Solaire')

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

<div style="margin-left: -50px; margin-top: -2px;">

    <div class="d-flex  align-items-center mx-5 mt-4">
        <h4 class="mr-2 p-2" style="font-family: sans-serif">Liste Des Lunettes</h4>

        <!-- Add the search form here -->
        <form action="{{ route('lunettesol.search') }}" method="GET" class="search-input ">
            <div class="input-group p-2">
                <input type="text" class="form-control" placeholder="Reference / Marque" name="search">
                <button class="btn btn-outline-primary " type="submit"> <i class="mdi mdi-magnify "></i> Search</button>
            </div>
        </form>

        <p class="card-description ml-auto p-2">
            <a href="{{ route('lunettesol.create') }}" class="btn btn-success text-white" style="background-color: #ff7d7d ; border-color:transparent"> <i  class="mdi mdi-library-plus "></i>  Ajouter Lunette </a>
        </p>
    </div>
</div>

<div class="table-responsive mx-3 mt-3 ">
    <table class="table table-striped table-sm text-center justify-content-center">
        <thead>
            <tr>
                <th>Image</th>
                <th>Reference</th>
                <th>Genre</th>
                <th>Marque</th>
                <th>Prix</th>
                <th>Type </th>
                <th>Matiere </th>
                <th>Couleur</th>
                <th>Etat</th>
                <th>Couleur Verre</th>
                <th>Verre Polarisé</th>
                <th>Verre Degradé</th>
                <th>Verre Miroirs</th>
                <th>Adaptable </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lunettesSolaires as $lunetteSolaire)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even-row' : 'odd-row' }}">
                    <td>
                        @if($lunetteSolaire->cover)
                            <?php $coverImage = explode(',', $lunetteSolaire->cover); ?>
                            <img src="{{ asset('produit/solaires/' . $coverImage[0]) }}" alt="Cover Image" class="img-fluid rounded">
                        @else
                            No Cover Image
                        @endif
                    </td>
                    <td>{{ $lunetteSolaire->reference }}</td>
                    <td>
                        @if($lunetteSolaire->genre === 0)
                            Homme
                        @elseif($lunetteSolaire->genre === 1)
                            Femme
                        @else
                            Les deux
                        @endif
                    </td>
                    <td>{{ $lunetteSolaire->marque }}</td>
                    <td>{{ $lunetteSolaire->prix }}</td>
                    <td>{{ $lunetteSolaire->type_monture }}</td>
                    <td>{{ $lunetteSolaire->matiere_monture }}</td>
                    <td>{{ $lunetteSolaire->couleur }}</td>
                    
                    <td>
                        @if($lunetteSolaire->etat === 0)
                            En stock
                        @elseif($lunetteSolaire->etat === 1)
                            Vendu
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>{{ $lunetteSolaire->couleur_verre }}</td>
                    <td>
                        @if($lunetteSolaire->verre_polarise === 0)
                            Non
                        @elseif($lunetteSolaire->verre_polarise === 1)
                            Oui
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        @if($lunetteSolaire->verre_degrade === 0)
                            Non
                        @elseif($lunetteSolaire->verre_degrade === 1)
                            Oui
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        @if($lunetteSolaire->verre_miroirs === 0)
                            Non
                        @elseif($lunetteSolaire->verre_miroirs === 1)
                            Oui
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        @if($lunetteSolaire->adaptable === 0)
                            Non
                        @elseif($lunetteSolaire->adaptable === 1)
                            Oui
                        @else
                            <!-- Handle other cases if needed -->
                        @endif
                    </td>
                    <td>
                        <!-- Update button -->
                        <a href="{{ route('lunettesol.edit', $lunetteSolaire->id) }}" class="btn btn-warning btn-action text-white" style="background-color: #ff7d7d; border-color:transparent;"><i class="mdi mdi-wrench"></i></a>

                        <!-- Delete button (You may want to add a confirmation dialog for deletion) -->
                        <form action="{{ route('lunettesol.destroy', $lunetteSolaire->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Vous êtes sûr de Supprimer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action text-white "><i class="mdi mdi-delete-forever"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="..." class="d-flex justify-content-center">
        <ul class="pagination" style="background-color: #e15385; border: 1px solid #e15385; color: black;">
            <!-- Previous Page -->
            <li class="page-item {{ $lunettesSolaires->currentPage() == 1 ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $lunettesSolaires->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true" style="color:#6B6F82">Previous</span>
                </a>
            </li>

            <!-- Page Links -->
            @for ($i = 1; $i <= $lunettesSolaires->lastPage(); $i++)
                <li class="page-item {{ $i == $lunettesSolaires->currentPage() ? 'active' : '' }}">
                    @if ($i == $lunettesSolaires->currentPage())
                        <span class="page-link" style="background-color: #e15385; color: white; border: 1px solid #e15385;">
                            {{ $i }}
                            <span class="sr-only">(current)</span>
                        </span>
                    @else
                        <a class="page-link" style="color:#6B6F82" href="{{ $lunettesSolaires->url($i) }}">{{ $i }}</a>
                    @endif
                </li>
            @endfor

            <!-- Next Page -->
            <li class="page-item">
                <a class="page-link" href="{{ $lunettesSolaires->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true"style="color:#6B6F82" >Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>

<!-- END: Content-->
@endsection
