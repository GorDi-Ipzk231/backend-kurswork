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

        <div style="margin: 3rem 0;">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-end">Emma Roberts</h2>
                </div>
                <div class="card-body" style="display:flex; align-items:center">
                    <img src="https://i.pinimg.com/564x/71/a6/e5/71a6e50cbc000609920d3732e72c6b57.jpg"
                        style="height:25rem; object-fit: cover; margin-right:1rem" alt="Haircuts">
                    <div>
                        <h5 class="bg-warning text-dark p-2 rounded">Emma has over 10 years of experience in hairstyling
                            and specializes in cutting and coloring. She is passionate about making every client look
                            and feel amazing.</h5>

                        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Emma did an amazing job with my hair! I love the new color and cut!😍</p>
                                        <footer class="blockquote-footer"><i>Emily S.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Emma is very professional and talented.😊 I always leave the salon feeling
                                            beautiful.</p>
                                        <footer class="blockquote-footer"><i>Lisa T.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Emma attention to detail is unmatched.😻 I'm never disappointed with my
                                            haircut.</p>
                                        <footer class="blockquote-footer"><i>SarahPT.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Emma gives the best haircuts! I always leave feeling refreshed.💜</p>
                                        <footer class="blockquote-footer"><i>Mark A.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-end">Olivia Johnson</h2>
                </div>
                <div class="card-body" style="display:flex; align-items:center">
                    <img src="https://i.pinimg.com/564x/0c/67/6b/0c676b7b7b8f2e40dcaaae63a7d8f3a8.jpg"
                        style="height:25rem; object-fit: cover; margin-right:1rem" alt="Nail Art">
                    <div>
                        <h5 class="bg-warning text-dark p-2 rounded">Olivia has over 8 years of experience in nail
                            styling and specializes in creative nail art and manicure treatments. She is dedicated to
                            providing exceptional service and making every client feel pampered.</h5>

                        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Olivia did an amazing job with my nails! I love the new design!🤩</p>
                                        <footer class="blockquote-footer"><i>Oleksandra S.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Olivia is very professional and talented.💫 I always leave the salon feeling
                                            beautiful.</p>
                                        <footer class="blockquote-footer"><i>Alina T.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Olivia's attention to detail is unmatched.💚 I'm never disappointed with my
                                            manicure.</p>
                                        <footer class="blockquote-footer"><i>Karina P.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Olivia gives the best manicures! I always leave feeling refreshed.😊</p>
                                        <footer class="blockquote-footer"><i>Arthur A.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-end">Liam Thompson</h2>
                </div>
                <div class="card-body" style="display:flex; align-items:center">
                    <img src="https://i.pinimg.com/564x/0c/c0/ff/0cc0fffc993f1ec609d36ae30c2c1272.jpg"
                        style="height:25rem; object-fit: cover; margin-right:1rem" alt="Skincare Specialist">
                    <div>
                        <h5 class="bg-warning text-dark p-2 rounded">Liam has over 12 years of experience in skincare
                            and specializes in personalized facial treatments and skincare routines. He is dedicated to
                            helping clients achieve healthy, glowing skin.</h5>

                        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Liam's facial treatments are incredible! My skin has never felt so good.🌟
                                        </p>
                                        <footer class="blockquote-footer"><i>Jessica M.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Liam is very knowledgeable and professional.😊 I trust him with all my
                                            skincare needs.</p>
                                        <footer class="blockquote-footer"><i>Rachel K.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Liam's attention to detail is amazing. My skin has never looked better!😻</p>
                                        <footer class="blockquote-footer"><i>Michael T.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Best facial ever! I always feel rejuvenated after a session with Liam.💜</p>
                                        <footer class="blockquote-footer"><i>Sophia L.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 3rem 0;">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-end">Sophia Brown</h2>
                </div>
                <div class="card-body" style="display:flex; align-items:center">
                    <img src="https://i.pinimg.com/564x/1d/64/bd/1d64bd3381090e7a6dce09f666c9035b.jpg"
                        style="height:25rem; object-fit: cover; margin-right:1rem" alt="Massage Therapist">
                    <div>
                        <h5 class="bg-warning text-dark p-2 rounded">Sophia has over 15 years of experience as a massage
                            therapist and specializes in therapeutic and deep tissue massages. She is committed to
                            helping clients achieve relaxation and relief from muscle tension.</h5>

                        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Sophia's massages are incredible!😁 I feel so relaxed and rejuvenated.</p>
                                        <footer class="blockquote-footer"><i>Emma R.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Sophia is very skilled and professional. Her massages always help relieve
                                            my muscle tension.💪🏻</p>
                                        <footer class="blockquote-footer"><i>Olivia M.</i></footer>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Sophia's attention to detail is amazing. My back pain has significantly
                                            improved!🙂</p>
                                        <footer class="blockquote-footer"><i>David K.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card" style="width:15rem; margin:1rem 0;">
                                <div class="card-header">
                                    Feedback
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>Best massage ever!😘 I always feel rejuvenated after a session with Sophia.
                                        </p>
                                        <footer class="blockquote-footer"><i>Sophia L.</i></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @endsection
</body>