@extends('layouts.app')

@section('content')
<style>
    body {
        padding-top: 20px;
    }

    .service-title {
        margin-bottom: 20px;
    }

    .service-item {
        margin-bottom: 10px;
    }

    .card img {
        height: 200px;
        object-fit: cover;
    }
</style>

<body>
    <div class="container" style="margin-bottom: 3rem;">
        <h1 class="text-center">Our Salon Services</h1>
        <div style="margin: 3rem 0;">
            <h2 class="service-title">Hair Services</h2>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" style="margin-bottom:1rem;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://images.squarespace-cdn.com/content/v1/633c62a0f0e6e662d4794c5a/93bcbcae-6220-4c0b-a0e6-7d3f08fd5fe2/medium-length-butterfly-haircut.jpg"
                            class="d-block w-100" style="height:35rem; object-fit: cover;" alt="Haircut and Styling">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h5>Haircut and Styling</h5>
                            <p>Get a fresh new look with our professional haircut and styling services.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://i0.wp.com/therighthairstyles.com/wp-content/uploads/2014/07/blonde-hair-color-featured.jpg?fit=1280%2C720&ssl=1"
                            class="d-block w-100" style="height:35rem; object-fit: cover;" alt="Hair Coloring">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h5>Hair Coloring</h5>
                            <p>Add some color to your life with our hair coloring services.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i0.wp.com/img.paisawapas.com/ovz3vew9pw/2022/11/23152748/Untitled-2-3.jpg?resize=1200%2C600&ssl=1"
                            class="d-block w-100" style="height:35rem; object-fit: cover;" alt="Keratin Treatment">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h5>Keratin Treatment</h5>
                            <p>Smooth and strengthen your hair with our keratin treatment.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <h2 class="service-title">Nail Services</h2>
            <h4 class="text-center">Our Nail Services</h4>
            <h5 class="text-center">We offer a variety of nail services to keep your hands and feet looking their
                best.</h5>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-around">
                <div class="card" style="width: 18rem; margin:1rem;">
                    <img src="https://cdn.shopify.com/s/files/1/0513/6777/2348/files/Picture1_bcc50580-83d5-4648-bbde-221ba219b710_480x480.jpg?v=1691743687"
                        class="card-img-top" style="height:22rem; object-fit: cover;" alt="Manikure">
                    <div class="card-body">
                        <h5 class="card-text">Manicure</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin:1rem 0;">
                    <img src="https://easywaxing.pl/wp-content/uploads/2023/07/Pedicure-Hybrydowy-3-1-768x1024.jpg"
                        class="card-img-top" style="height:22rem; object-fit: cover;" alt="Pedicure">
                    <div class="card-body">
                        <h5 class="card-text">Pedicure</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin:1rem 0;">
                    <img src="https://www.refinery29.com/images/11070387.jpg" class="card-img-top"
                        style="height:22rem; object-fit: cover;" alt="Gel Nails">
                    <div class="card-body">
                        <h5 class="card-text">Gel Nails</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin:1rem 0;">
                    <img src="https://i.pinimg.com/736x/f4/eb/72/f4eb72d056b87a0957cadddd8a4a6df5.jpg"
                        class="card-img-top" style="height:22rem; object-fit: cover;" alt="Nail Art">
                    <div class="card-body">
                        <h5 class="card-text">Nail Art</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem; margin:1rem 0;">
                    <img src="https://imgmedia.lbb.in/42417932_283764062471721_1211109516790731735_n_1586709494651.jpg"
                        class="card-img-top" style="height:22rem; object-fit: cover;" alt="Nail Extensions">
                    <div class="card-body">
                        <h5 class="card-text">Nail Extensions</h5>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <h2 class="service-title">Skincare Services</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" style="background-color: #ffc107;" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <h4>Facials</h4>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5><img src="https://vedix.com/cdn/shop/articles/Woman-in-mask-on-face-in-spa.jpg?v=1649767234"
                                    alt="Facials" style="width:10rem; height:5rem; object-fit:cover; margin:0 1rem;">
                                <strong>Relax and rejuvenate with our range of facial treatments.</strong>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4>Microdermabrasion</h4>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5><img src="https://hayesvalleymed.com/wp-content/uploads/2023/06/microdermabrasion-mda-header.jpg"
                                    alt="Facials" style="width:10rem; height:5rem; object-fit:cover; margin:0 1rem;">
                                <strong>Exfoliate and renew your skin with microdermabrasion.</strong>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4>Chemical Peels</h4>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <h5><img src="https://skinmd1.com/wp-content/uploads/2021/11/chemcial-peel.jpg"
                                    alt="Facials" style="width:10rem; height:5rem; object-fit:cover; margin:0 1rem;">
                                <strong>Improve your skin texture with our chemical peels.</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <h2 class="service-title">Massage Services</h2>
            <div id="massageCarousel" class="carousel carousel-dark slide" style="margin-bottom: 1rem;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#massageCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#massageCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#massageCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://www.mgsportsmassage.com/wp-content/uploads/2019/08/Relaxing-Massage-Atmosphere-1080x675.png"
                            class="d-block w-100" style="height: 35rem; object-fit: cover;" alt="Relaxation Massage">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h4>Relaxation Massage</h4>
                            <h5>Experience ultimate relaxation with our gentle and soothing massage techniques.</h5>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://www.targettherapies.co.uk/wp-content/uploads/2023/12/a-person-massaging-a-clients-bare-back-1024x683.jpeg"
                            class="d-block w-100" style="height: 35rem; object-fit: cover;" alt="Deep Tissue Massage">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h4>Deep Tissue Massage</h4>
                            <h5>Target those knots and tension with our deep tissue massage treatment.</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://miro.medium.com/v2/resize:fit:1400/1*X6npfXtjE3IIAr7Q1ggqEQ.jpeg"
                            class="d-block w-100" style="height: 35rem; object-fit: cover;" alt="Aromatherapy Massage">
                        <div class="carousel-caption d-none d-md-block" style="background-color: white;">
                            <h4>Aromatherapy Massage</h4>
                            <h5>Enhance relaxation with essential oils and aromatic scents during our aromatherapy
                                massage.</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#massageCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#massageCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/yyb3R2nd1p0i5oGSk0lgltD2H8ch94D77/lc3X" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcL1p3W4NfAc4lFzXZtd2YY6kOO3pY7B1W1yZNhCz" crossorigin="anonymous">
        </script>
    @endsection
</body>