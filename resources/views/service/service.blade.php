@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="container d-flex flex-column justify-content-center align-items-center mt-5">

    <h1>Services!</h1>

    <a type="button" class="m-1 btn btn-warning mb-3" style="width: 150px;"
        href="{{route('service.create') }}">Create</a>

    <table class="table table-bordered m-3" style="margin-bottom: 5rem !important;">

        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th
                    style="{{ (auth()->user()->role->name == 'Customer') ? 'display: none;' : '' }}">
                    Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{$service->name}}</td>
                    <td>{{$service->description}}</td>
                    <td class="d-flex justify-content-center align-items-center"
                        style="{{ (auth()->user()->role->name == 'Customer') ? 'display: none;' : '' }}">
                        <a type="button" class="btn btn-info m-1" href="{{route('service.edit', $service->id) }}">Edit</a>
                        <a type="button" class="btn btn-dark m-1" href="{{route('service.show', $service->id) }}">Show</a>
                        <form action="{{route('service.destroy', $service->id) }}" method="post" class="m-1">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection