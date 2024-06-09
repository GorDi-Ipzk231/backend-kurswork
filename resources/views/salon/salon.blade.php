@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">


    <h1>Salons</h1>

    <a type="button" class="m-1 btn btn-warning mb-3" style="width: 150px;"
        href="{{ route('salon.create') }}">Create</a>

    <table class="table m-3 border">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Contact Phone</th>
                <th>Contact Email</th>
                <th>Address</th>
                <th style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salons as $salon)
                <tr>
                    <td>{{ $salon->name }}</td>
                    <td>{{ $salon->description }}</td>
                    <td>{{ $salon->contact_phone }}</td>
                    <td>{{ $salon->contact_email }}</td>
                    <td>{{ $salon->address }}</td>
                    <td  style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">
                        <a style="width:5rem" class="m-1 btn btn-info" href="{{ route('salon.edit', $salon->id) }}">Edit</a>
                        <a style="width:5rem" class="m-1 btn btn-dark" href="{{ route('salon.show', $salon->id) }}">Show</a>
                        <form action="{{ route('salon.destroy', $salon->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="width:5rem" class="m-1 btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection