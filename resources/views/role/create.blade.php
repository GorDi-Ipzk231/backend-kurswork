@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="mx-auto container d-flex flex-column justify-content-center align-items-center p-5 rounded bg-light">


    <h1 class="m-2"> Create role </h1>



    <form action="{{ route('role.store') }}" method="post" class="m-2">
        @csrf
        <label for="name">Name</label>
        <!-- <textarea id="name" name="name"></textarea> -->
        <input type="text" id="name" name="name" class="form-control">

        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-warning m-2">Create</button>
            <a type="button" class="btn btn-info m-2" href="{{route('role.index') }}">Back</a>
        </div>
    </form>

</div>
@endsection