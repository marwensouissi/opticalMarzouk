@extends('admin.master')

@section('title', 'prix')

@section('content')

<div class="container mt-4">
    <div class="row">
        @foreach($tables as $tableName => $table)
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">{{ ucfirst(str_replace('_', ' ', $tableName)) }}</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('updateTable', ['tableName' => $tableName]) }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sphere</th>
                                        <th>Cylindre 0</th>
                                        <th>Cylindre -0.25 to -2.00</th>
                                        <th>Cylindre -2.25 to -3.00</th>
                                        <th>Cylindre -3.25 to -4.00</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table['data'] as $row)
                                    <tr>
                                        <td><input type="text" class="form-control" name="sphere[]" value="{{ $row->sphere }}"></td>
                                        <td><input type="text" class="form-control" name="cylindre0[]" value="{{ $row->cylindre0 }}"></td>
                                        <td><input type="text" class="form-control" name="cylindre_0_25_to_2_00[]" value="{{ $row->{'cylindre-0_25_to-2_00'} ?? '' }}"></td>
                                        <td><input type="text" class="form-control" name="cylindre_2_25_to_3_00[]" value="{{ $row->{'cylindre-2_25_to-3_00'} ?? '' }}"></td>
                                        <td><input type="text" class="form-control" name="cylindre_3_25_to_4_00[]" value="{{ $row->{'cylindre-3_25_to-4_00'} ?? '' }}"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary d-block mx-auto mt-3" style="width: 29%; background-color: #e15385;border-block: #e15385">Update</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
