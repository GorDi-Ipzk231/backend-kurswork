@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">


    <h1>Services!</h1>

    <a type="button" class=" m-1 btn btn-warning mb-3" style="width: 150px;" href="{{route('service.create') }}">Create</a>

    <table class="table m-3 border">

        <thead>
            <th>Name</th>
            <th>Description</th>
            <th style="{{ (auth()->user()->role->name == 'Customer' || auth()->user()->role->name == 'Stylist') ? 'visibility:hidden' : 'visibility:visible' }}">Actions</th>
        </thead>

        @foreach($services as $service)
        <tr>
            <td>{{$service->name}}</td>
            <td>{{$service->description}}</td>
            <td class="d-flex" style="{{ (auth()->user()->role->name == 'Customer' || auth()->user()->role->name == 'Stylist') ? 'visibility:hidden' : 'visibility:visible' }}">
                <a type="button" class=" m-1 btn btn-info" href="{{route('service.edit', $service->id) }}">Edit</a>
                <a type="button" class=" m-1 btn btn-dark" href="{{route('service.show', $service->id) }}">Show</a>
                <form action="{{route('service.destroy', $service->id) }}" method="post">
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