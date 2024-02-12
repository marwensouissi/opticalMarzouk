<!-- resources/views/optical/forms/1_6.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Update 1_6 Table</h1>

    <form action="{{ route('prix.update') }}" method="post">
        @csrf
        <input type="hidden" name="table" value="1_6">

        <!-- Input fields for 1_6 table -->
        <!-- Add your input fields here -->

        <button type="submit">Update 1_6</button>
    </form>
@endsection
