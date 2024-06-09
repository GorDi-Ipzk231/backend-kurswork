@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <div class="mx-auto container d-flex flex-column justify-content-center align-items-center p-5 rounded bg-light">


    <h1 class="m-2"> Edit role </h1>



    <form action="{{ route('role.update', $role->id) }}" enctype="multipart/form-data" method="post" class="m-2">
        @csrf
        @method('PUT')
        <label for="name" class="m-2">First name</label>
        <!-- <textarea id="name" value="{{$role->name}}" name="name">{{$role->name}}</textarea> -->
        <input type="text" id="name" name="name" class="form-control" value="{{$role->name}}">

        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-warning m-2">Edit</button>
            <a type="button" class="btn btn-info m-2" href="{{route('role.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection