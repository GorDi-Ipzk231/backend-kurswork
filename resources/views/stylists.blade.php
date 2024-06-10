@extends('layouts.app')

@section('content')
<style>
    body {
        padding-top: 20px;
    }
</style>


<body>
    <div class="container" style="margin-bottom: 2rem;">
        <h1 class="text-center my-4">
            Our Salon Stylists</h1>

        @foreach($stylists as $stylist)
            <div style="margin: 3rem 0;">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-end">{{ $stylist->first_name }}</h2>
                    </div>
                    <div class="card-body" style="display:flex; align-items:center">
                        <img src="{{ $stylist->img_url }}" style="height:25rem; object-fit: cover; margin-right:1rem"
                            alt="Stylist Image">
                        <div>
                            <h5 class="bg-warning text-dark p-2 rounded">{{ $stylist->description }}</h5>

                            @if(isset($stylist->reviews) && $stylist->reviews->isNotEmpty())

                                <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

                                    @foreach($stylist->reviews as $review)
                                        <div class="card" style="width:15rem; margin:1rem 0;">
                                            <div class="card-header">
                                                Feedback
                                            </div>
                                            <div class="card-body">
                                                <blockquote class="blockquote mb-0">
                                                    <p>{{ $review->comment }}</p>
                                                    <footer class="blockquote-footer"><i>{{ $review->author }}</i></footer>
                                                </blockquote>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            @else
                                <p>No reviews yet.</p>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>