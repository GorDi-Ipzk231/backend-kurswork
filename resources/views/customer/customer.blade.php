@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">


    <h1>Customers!</h1>

    <a type="button" class=" m-1 btn btn-warning mb-3" style="width: 150px;"
        href="{{route('customer.create') }}">Create</a>

    <table class="table table-bordered m-3" style="margin-bottom: 5rem !important;">

        <thead class="thead-dark">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Phone</th>
            <th>Contact Email</th>
            <th>Actions</th>
        </thead>

        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td>{{$customer->contact_phone}}</td>
            <td>{{$customer->contact_email}}</td>
            <td class="d-flex">
                <a type="button" class=" m-1 btn btn-info" href="{{route('customer.edit', $customer->id) }}">Edit</a>
                <a type="button" class=" m-1 btn btn-dark" href="{{route('customer.show', $customer->id) }}">Show</a>
                <form action="{{route('customer.destroy', $customer->id) }}" method="post">
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