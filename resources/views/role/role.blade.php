@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">


    <h1>Roles!</h1>

    <a type="button" class=" m-1 btn btn-warning mb-3" style="width: 150px;" href="{{route('role.create') }}">Create</a>

    <table class="table m-3 border">

        <thead>
            <th>Name</th>
            <th style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">Actions</th>
        </thead>

        @foreach($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td class="d-flex" style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">
                <a type="button" class=" m-1 btn btn-info" href="{{route('role.edit', $role->id) }}">Edit</a>
                <a type="button" class=" m-1 btn btn-dark" href="{{route('role.show', $role->id) }}">Show</a>
                <form action="{{route('role.destroy', $role->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class=" m-1 btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach


    </table>
</div>

@endsection