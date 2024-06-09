@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">

    <h1>Stylists!</h1>

    <a type="button" class=" m-1 btn btn-warning mb-3" style="width: 150px;"
        href="{{route('stylist.create') }}">Create</a>

    <table class="table table-bordered m-3">

        <thead class="thead-dark">
            <th>First name</th>
            <th>Last name</th>
            <th>Contact Phone</th>
            <th>Contact Email</th>
            <th style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">
                Actions</th>
        </thead>

        @foreach($stylists as $stylist)
            <tr>
                <td>{{$stylist->first_name}}</td>
                <td>{{$stylist->last_name}}</td>
                <td>{{$stylist->contact_phone}}</td>
                <td>{{$stylist->contact_email}}</td>
                <td class="d-flex"
                    style="{{ auth()->user()->role->name == 'Customer' ? 'visibility:hidden' : 'visibility:visible' }}">
                    <a type="button" class=" m-1 btn btn-info" href="{{route('stylist.edit', $stylist->id) }}">Edit</a>
                    <a type="button" class=" m-1 btn btn-dark" href="{{route('stylist.show', $stylist->id) }}">Show</a>
                    <form action="{{route('stylist.destroy', $stylist->id) }}" method="post">
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