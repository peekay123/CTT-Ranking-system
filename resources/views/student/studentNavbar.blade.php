<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/student.css') }}" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

</head>

    <body>
        <div class="container-fluid" style="background-color: #1D8348;">
            <div class="row" style="margin-left: 5%; margin-right: 5%;">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">CTT<span style="color: #ff7f18;">Ranking System</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form method="POST" action="{{ route('logout') }}" class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        @csrf
                        <div class="navbar-nav ms-auto me-0 mt-0" style="color: #ffffff;">
                            <a href="{{ route('studentDashboard') }}" class="nav-item nav-link active text-secondary">Home</a>
                            <a href="{{ route('creteria') }}" class="nav-item nav-link">Criteria</a>
                            <a href="{{ route('contactUs') }}" class="nav-item nav-link">Contact</a>
                            <a href="#" class="nav-item nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </div>
                    </form>
                </nav>
            </div>
        </div>


        <!-- Carousel Start -->
        <div class="container-fluid px-0" >
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="height: 90vh;">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/1.jpg') }}" class="img-fluid" alt="First slide" style="height: 90vh;width: 100%;">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="h4 animated fadeInUp" style="color: #ffffff;">Automatic Ranking System</h6>
                                <h1 class="display-1 mb-4 animated fadeInLeft" style="color: #ff7f18;">Quality Digital Services You Really Need!</h1>                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/2.jpg') }}" class="img-fluid" alt="Second slide" style="height: 90vh; width: 100%;">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="h4 animated fadeInUp" style="color: #ffffff;">Automatic Ranking System</h6>
                                <h1 class="display-1 mb-4 animated fadeInLeft" style="color: #ff7f18;">Quality Digital Services You Really Need!</h1>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/3.jpg') }}" class="img-fluid" alt="Third slide" style="height: 90vh; width: 100%;">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="h4 animated fadeInUp" style="color: #ffffff;">Automatic Ranking System</h6>
                                <h1 class="display-1 mb-4 animated fadeInLeft" style="color: #ff7f18;">Quality Digital Services You Really Need!</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev" style="background-color: #15B83F;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next" style="background-color: #15B83F;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>
