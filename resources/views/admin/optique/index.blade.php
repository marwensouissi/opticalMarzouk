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

  .table img {
      max-width: 100%;
      min-width: 100%;
      height: auto;
      border-radius: 15px;
  }

  .btn-action {
      margin-right: 5px;
  }

  /* Set the max-width for the table */
  .table-responsive {
      max-width: 95%;
      overflow-x: auto;
  }

</style>

<div style="margin-left: -50px">

<div class="d-flex justify-content-between align-items-center mx-5 mt-4">
    <h4 class="mr-2" style="font-family: sans-serif">Liste Des Lunettes</h4>
    <p class="card-description">
        <button type="submit" class="btn btn-success text-white">Ajouter Lunette</button>
    </p>
</div>

<div class="table-responsive mx-5 mt-3 ">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Reference</th>
                <th>Prix</th>
                <th>Type Monture</th>
                <th>Matiere Monture</th>
                <th>Couleur</th>
                <th>Etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lunettesOptiques as $lunetteOpt)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even-row' : 'odd-row' }}">
                    <td>
                        @if($lunetteOpt->image)
                            <?php $image = explode(',', $lunetteOpt->image); ?>
                            <img src="{{ asset('produit/optique/' . $image[1]) }}" alt="Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $lunetteOpt->reference }}</td>
                    <td>{{ $lunetteOpt->marque }}</td>
                    <td>{{ $lunetteOpt->prix }}</td>
                    <td>{{ $lunetteOpt->type_monture }}</td>
                    <td>{{ $lunetteOpt->matiere_monture }}</td>
                    <td>{{ $lunetteOpt->couleur }}</td>
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
                        <a href="{{ route('lunetteopt.edit', $lunetteOpt->id) }}" class="btn btn-warning btn-action"><i class="mdi mdi-wrench"></i></a>

                        <!-- Delete button (You may want to add a confirmation dialog for deletion) -->
                        <form action="{{ route('lunetteopt.destroy', $lunetteOpt->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-action"><i class="mdi mdi-delete-forever"></i></button>
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
