@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="mx-auto container d-flex flex-column justify-content-center align-items-center p-5 rounded bg-light">


    <h1 class="m-2"> Edit customer </h1>



    <form action="{{ route('customer.update', $customer->id) }}" enctype="multipart/form-data" method="post"
        class="m-2">
        @csrf
        @method('PUT')
        <label for="first_name" class="m-2">First name</label>
        <!-- <textarea id="first_name" name="first_name">{{$customer->first_name}}</textarea> -->
        <input type="text" id="first_name" name="first_name" class="form-control" value="{{$customer->first_name}}">

        @error('first_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="last_name" class="m-2">Last name</label>
        <!-- <textarea id="last_name" name="last_name">{{$customer->last_name}}</textarea> -->
        <input type="text" id="last_name" name="last_name" class="form-control" value="{{$customer->last_name}}">

        @error('last_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="service" class="m-2">Service</label>
        <!-- <textarea id="service" name="service">{{$customer->service}}</textarea> -->

        <!-- <input type="text" id="service" name="service" class="form-control" value="{{$customer->service}}"> -->
        <select id="service" name="service" class="form-control">
            <option value="">Choose a service</option>
            @foreach($services as $service)
                <option value="{{ $service->name }}" {{ $service->name == $customer->service ? 'selected' : '' }}>
                    {{ $service->name }}
                </option>
            @endforeach
        </select>

        @error('service')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="contact_phone" class="m-2">Contact phone</label>
        <!-- <textarea id="contact_phone" name="contact_phone">{{$customer->contact_phone}}</textarea> -->
        <input type="text" id="contact_phone" name="contact_phone" class="form-control"
            value="{{$customer->contact_phone}}">

        @error('contact_phone')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="contact_email" class="m-2">Contact email</label>
        <!-- <textarea id="contact_email" name="contact_email">{{$customer->contact_email}}</textarea> -->
        <input type="text" id="contact_email" name="contact_email" class="form-control"
            value="{{$customer->contact_email}}">

        @error('contact_email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-warning m-2">Edit</button>
            <a type="button" class="btn btn-info m-2" href="{{route('customer.index') }}">Back</a>
        </div>
    </form>
</div>

@endsection