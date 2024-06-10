<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GorDi Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .image {
            height: 600px;
            object-fit: cover;
        }

        .image2 {
            height: 500px;
            object-fit: cover;
        }

        .background {
            background-color: rgb(70, 53, 39);
        }

        .h1 {
            font-size: 50px;
        }

        .p {
            font-size: 20px;
        }

        .borderWord {
            -webkit-text-stroke-width: 0.2px;
            -webkit-text-stroke-color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GorDi<span class="text-warning borderWord">Salon</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @if (Route::has('login'))
                        <div class="navbar-nav">
                            @auth
                                @if (auth()->user()->role->name != 'Customer')
                                    <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    <a href="{{ url('/services') }}" class="nav-link active">Services</a>
                                    <a href="{{ url('/stylists') }}" class="nav-link active">Stylists</a>
                                @endif
                            @endauth
                            @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name == 'Customer' || auth()->user()->role->name == null))
                                <a href="{{ url('/services') }}" class="nav-link active">Services</a>
                                <a href="{{ url('/stylists') }}" class="nav-link active">Stylists</a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            <div class="navbar-nav order-md-last">
                <a href="tel:1234567890" class="nav-link">+(380)-956-778-090</a>
            </div>
        </div>
    </nav>


    <header class="background text-white d-flex flex-column flex-md-row align-items-center">
        <img src="https://img.freepik.com/fotos-premium/close-de-beleza-eterea-do-rosto-perfeitamente-elaborado-de-uma-mulher_818261-19767.jpg"
            class="image" alt="1" />
        <div class="container d-flex flex-column align-items-center">
            <h1 class="h1">Welcome to GorDi<span class="text-warning borderWord">Salon</span></h1>
            <p class="p">The best salon for your beauty!</p>
            @guest
                <a href="{{ route('login') }}" class="btn btn-warning px-5 py-2">Login</a>
            @else
                @if(auth()->user()->role->name == 'Customer')
                    <a href="{{ url('/services') }}" class="btn btn-warning px-5 py-2 mt-3">Read</a>
                @endif
            @endguest
        </div>
    </header>

    <section id="about" class="container my-5 text-center">
        <h2>About us</h2>
        <p>GorDi Salon we offer a wide range of care services for you:</p>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.wixstatic.com/media/8ddfc54557334e96a2eac37ab491e1c5.jpeg/v1/fill/w_602,h_480,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Hair%20Supplies.jpeg"
                        class="d-block w-100 image" alt="1">
                    <div class="carousel-caption d-none d-md-block card">
                        <h5 class="text-dark">Haircut and styling</h5>
                        <p class="text-dark">Just here. Special for you!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://fararti.com/cdn/shop/files/accesories-1_57256c2a-5641-467d-a3ac-45dde7a29b21.webp?v=1668098024"
                        class="d-block w-100 image" alt="2">
                    <div class="carousel-caption d-none d-md-block card">
                        <h5 class="text-dark">Manicure and pedicure</h5>
                        <p class="text-dark">Just here. Special for you!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://media.licdn.com/dms/image/D5612AQFhilRAQu8Rgw/article-cover_image-shrink_720_1280/0/1673726293138?e=2147483647&v=beta&t=j80HiKYB1q2_OuD7ds2kNVxZ7XUE6ex10C8gwLcpWRI"
                        class="d-block w-100 image" alt="3">
                    <div class="carousel-caption d-none d-md-block card">
                        <h5 class="text-dark">Makeup for any event</h5>
                        <p class="text-dark">Just here. Special for you!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <section class="section section-lg bg-default novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50 align-items-lg-center justify-content-xl-between">
                <div class="col-lg-6">
                    <div class="block-xs">
                        <h2>Why Clients <br>Choose Us</h2>
                        <p class="big text-gray-800">At our salon, we offer expertise and professionalism with highly
                            trained stylists, ensuring personalized and top-notch service. Our state-of-the-art
                            facilities provide a tranquil environment for relaxation and pampering. We use high-quality,
                            professional-grade products and continuously innovate to offer the latest trends and
                            techniques. Our commitment to customer-centricity and community involvement sets us apart.
                            Clients leave not just looking their best, but feeling rejuvenated and cared for.</p>
                        <p>We prioritize your comfort and satisfaction by offering tailored experiences to meet your
                            unique needs. Our skilled staff is attentive, friendly, and dedicated to creating a
                            welcoming atmosphere. Additionally, we use eco-friendly practices and products to minimize
                            our impact on the environment while providing exceptional salon services.</p>
                        @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name != 'Customer' || auth()->user()->role->name == null))
                            <a class="btn btn-warning" href="#">Our Stylists</a>
                        @else
                            <a class="btn btn-warning" href="/stylists">Our Stylists</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-images-classic">
                        <div class="row row-30 row-novi">
                            <div class="col-6">
                                <div class="box-image-item">
                                    <img class="image2 "
                                        src="https://www.shutterstock.com/image-photo/young-asian-beauty-woman-curly-600nw-2290911523.jpg"
                                        alt="" width="300" height="458">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-image-item">
                                    <img class="image2 w-300" src="https://img.etimg.com/photo/101021978/101021978.jpg"
                                        alt="" width="300" height="458">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default novi-bg novi-bg-img my-5">
        <div class="container">
            <div class="row row-50 align-items-lg-center justify-content-xl-between">
                <div class="col-lg-6">
                    <div class="box-images-classic">
                        <div class="row row-30 row-novi">
                            <div class="col-6">
                                <div class="box-image-item">
                                    <img class="image2 "
                                        src="https://i.pinimg.com/564x/3e/15/de/3e15dea663dd25016eea68600f15ce2d.jpg"
                                        alt="" width="300" height="458">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-image-item">
                                    <img class="image2 w-300"
                                        src="https://i.pinimg.com/564x/e8/53/f7/e853f719c51044a7e18260f6dc7bd23e.jpg"
                                        alt="" width="300" height="458">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="width:45%">
                    <div class="block-xs">
                        <h2>Our Services <br>Choose Us</h2>
                        <p class="big text-gray-800"> At our salon, we offer a comprehensive range of high-quality
                            beauty and grooming services tailored to meet the unique needs of each client. From
                            precision haircuts and stunning color treatments to revitalizing facials and soothing
                            massages, our diverse offerings ensure that every aspect of your well-being is taken care
                            of. Our highly trained professionals are skilled in the latest techniques and trends,
                            allowing us to provide exceptional results that exceed your expectations.</p>
                        <p>Additionally, we specialize in indulgent spa treatments that leave you feeling refreshed and
                            rejuvenated. We use premium products and state-of-the-art equipment to enhance the quality
                            of our services and ensure the best experience for our clients. By prioritizing customer
                            satisfaction and personalized care, our salon continues to be the preferred choice for those
                            seeking a luxurious and transformative experience.</p>
                        @if(auth()->user() && auth()->user()->role && (auth()->user()->role->name != 'Customer' || auth()->user()->role->name == null))
                            <a class="btn btn-warning" href="#">Our Services</a>
                        @else
                            <a class="btn btn-warning" href="/services">Our Services</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-3 background text-white text-center" style="font-size: 20px;">
        <p>&copy; 2024 GorDi<span class="text-warning borderWord">Salon</span></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>