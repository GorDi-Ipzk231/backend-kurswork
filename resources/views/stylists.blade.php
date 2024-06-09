@extends('layouts.app')

@section('content')
<style>
    body {
        padding-top: 20px;
    }

    .stylist-section {
        margin-bottom: 40px;
    }

    .feedback {
        border-top: 1px solid #ccc;
        padding-top: 10px;
        margin-top: 10px;
    }
</style>


<body>
    <div class="container">
        <h1 class="text-center my-4">Meet Our Salon Stylists</h1>

        <div class="stylist-section">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Stylist: Jane Doe</h2>
                </div>
                <div class="card-body">
                    <p>Jane has over 10 years of experience in hairstyling and specializes in cutting and coloring. She
                        is passionate about making every client look and feel amazing.</p>

                    <div class="feedback">
                        <h3>Client Feedbacks:</h3>
                        <p>"Jane did an amazing job with my hair! I love the new color and cut!" - Emily S.</p>
                        <p>"Jane is very professional and talented. I always leave the salon feeling beautiful." - Lisa
                            T.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="stylist-section">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Stylist: John Smith</h2>
                </div>
                <div class="card-body">
                    <p>John is a skilled barber with a talent for creating classic and modern looks. He enjoys working
                        with all hair types and takes pride in delivering precision haircuts.</p>

                    <div class="feedback">
                        <h3>Client Feedbacks:</h3>
                        <p>"John gives the best haircuts! I always leave feeling refreshed." - Mark A.</p>
                        <p>"John’s attention to detail is unmatched. I’m never disappointed with my haircut." - Sarah P.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="stylist-section">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Stylist: Emily Martinez</h2>
                </div>
                <div class="card-body">
                    <p>Emily is a talented makeup artist and hairstylist who excels in bridal and special occasion
                        styles. She loves to bring out the unique beauty in each of her clients.</p>

                    <div class="feedback">
                        <h3>Client Feedbacks:</h3>
                        <p>"Emily’s makeup skills are flawless! She made me look and feel like a princess." - Anna B.
                        </p>
                        <p>"Emily is so creative and talented. I always feel glamorous after a session with her." -
                            Jennifer C.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>