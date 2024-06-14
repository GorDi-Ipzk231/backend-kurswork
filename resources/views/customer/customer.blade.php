@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class=" mx-auto container d-flex flex-column justify-content-center align-items-center">
    <h1>Customers!</h1>
    @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name != 'Customer' || auth()->user()->role->name != null))
        <a type="button" class=" m-1 btn btn-warning mb-3" style="width: 150px;"
            href="{{route('customer.create') }}">Create</a>
    @endif
    <table class="table table-bordered m-3" style="margin-bottom: 5rem !important;">
        <thead class="thead-dark">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Service</th>
            <th>Contact Phone</th>
            <th>Contact Email</th>
            @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name != 'Customer' || auth()->user()->role->name != null))
                <th>Actions</th>
            @endif
        </thead>

        @foreach($customers as $customer)
            <tr id="customer-{{ $customer->id }}">
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->service}}</td>
                <td>{{$customer->contact_phone}}</td>
                <td>{{$customer->contact_email}}</td>
                @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name != 'Customer' || auth()->user()->role->name != null))
                    <td class="d-flex">
                        <a type="button" class=" m-1 btn btn-info" href="{{route('customer.edit', $customer->id) }}">Edit</a>
                        <a type="button" class=" m-1 btn btn-dark" href="{{route('customer.show', $customer->id) }}">Show</a>
                        <button type="button" class=" m-1 btn btn-danger delete-btn"
                            data-id="{{ $customer->id }}">Delete</button>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const customerId = this.getAttribute('data-id');
                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                if (confirm('Are you sure you want to delete this customer?')) {
                    fetch(`/customers/${customerId}/destroy-async`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': token,
                            'Content-Type': 'application/json'
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                document.getElementById(`customer-${customerId}`).remove();
                            } else {
                                alert('Error: ' + data.error);
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            });
        });
    });
</script>
@endsection