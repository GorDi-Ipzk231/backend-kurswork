<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<h3 class="m-2">Show </h3>

<ul class="list-group m-2">
    <li class="list-group-item">{{$stylist->first_name}}</li>
    <li class="list-group-item">{{$stylist->last_name}}</li>
    <li class="list-group-item">{{$stylist->contact_phone}} </li>
    <li class="list-group-item">{{$stylist->contact_email}}</li>
</ul>

<a type="button" class="btn btn-info m-2" href="{{route('stylist.index') }}">Back</a>