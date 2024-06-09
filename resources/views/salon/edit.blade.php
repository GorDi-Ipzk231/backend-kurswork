@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <div class="mx-auto container d-flex flex-column justify-content-center align-items-center p-5 rounded bg-light">


    <h1 class="m-2"> Edit salon </h1>



    <form action="{{ route('salon.update', $salon->id) }}" enctype="multipart/form-data" method="post" class="m-2">
        @csrf
        @method('PUT')
        <label for="name" class="m-2">First name</label>
        <!-- <textarea id="name" name="name">{{$salon->name}}</textarea> -->
        <input type="text" id="name" name="name" class="form-control" value="{{$salon->name}}">

        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="description" class="m-2">Description</label>
        <!-- <textarea id="description" name="description">{{$salon->description}}</textarea> -->
        <input type="text" id="description" name="description" class="form-control" value="{{$salon->description}}">

        @error('description')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="contact_phone" class="m-2">Contact phone</label>
        <!-- <textarea id="contact_phone" name="contact_phone">{{$salon->contact_phone}}</textarea> -->
        <input type="text" id="contact_phone" name="contact_phone" class="form-control" value="{{$salon->contact_phone}}">

        @error('contact_phone')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="contact_email" class="m-2">Contact email</label>
        <!-- <textarea id="contact_email" name="contact_email">{{$salon->contact_email}}</textarea> -->
        <input type="text" id="contact_email" name="contact_email" class="form-control" value="{{$salon->contact_email}}">

        @error('contact_email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="address" class="m-2">Address</label>
        <!-- <textarea id="address" name="address">{{$salon->address}}</textarea> -->
        <input type="text" id="address" name="address" class="form-control" value="{{$salon->address}}">

        @error('address')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-warning m-2">Edit</button>
            <a type="button" class="btn btn-info m-2" href="{{route('salon.index') }}">Back</a>
        </div>
    </form>
</div>
@endsection