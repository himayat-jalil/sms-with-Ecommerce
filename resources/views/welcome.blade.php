    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <title>Management | SMS</title>
    </head>
    <style>
        .bg {
            background: darkkhaki;
        }

        p {
            font-size: 1.1em;
        }

        .header {
            height: 500px;
            padding: 0;
            background-image: url({{ asset('images/super2.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
        }

        .nav-link {
            color: white;
        }

        .navbar-brand {
            color: white;
        }

        .p-msg-section {
            width: 60%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 40px auto;

        }

        .img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background-position: center;
        }

        .col-sm-6 {
            text-align: center;
        }

        .offer-awesome {
            font-size: 70px;
            margin: 10px auto;
            color: darkorange;

        }

        .far {
            font-size: 70px;
            margin: 10px auto;
            color: darkorange;

        }

        .heading-2 {
            margin: 25px 0;
            text-align: left;
            text-decoration: underline;
        }

        .get-in-touch {
            background: darkorange;
            border: none;
            text-size: 1.1em;
        }

        .teacher {
            width: 80%;
            margin: 15px auto;
        }

        .card-img-top {
            border-radius: 50%;
            margin: 10px auto;
            border: 2px solid darkorange;
            height: 150px;
            width: 150px;
            padding: 0.6em;
            background-position: center;
        }

        #carouselExampleControls {
            background: darkorange;
            padding: 30px;
        }

        .carousel-control-prev {
            left: -112px;
        }

        .carousel-control-next {
            right: -100px;
        }


        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 100%, 100%;
            border-radius: 50%;

            background-image: none;
        }

        .carousel-control-next-icon:after {
            content: '>>';
            font-size: 30px;
            color: black;
        }

        .carousel-control-prev-icon:after {
            content: '<<';
            font-size: 30px;
            color: black;
        }

        .social {
            margin: 0 auto;
        }

        .fa-facebook {
            color: blue;
            font-size: 20px;
        }

        .fa-whatsapp {
            color: green;
            font-size: 20px;
        }

        .fa-google {
            font-size: 20px;
        }

        #studentLogin {
            color: black;
        }

        .loginImage {
            width: 120px;
            margin: 5px auto;
        }

    </style>

    <body>
        <div class="container-fluid header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand ml-5" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
                    <ul class="navbar-nav color">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallary</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="" id="studentLogin" class="nav-link" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Student Login
                                </a>
                                <a class="dropdown-item" href="#">Faculty Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- student login Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    @if (Session::has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('student.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="p-msg-section">
            <div class="col-sm-6 p-msg">
                <h2 class="heading-2">Principal Message</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur ipsam beatae corrupti nisi
                    repellat nostrum quaerat rem eaque, ea eveniet repellendus a ab blanditiis non tempora similique
                    soluta,
                    numquam aliquam?
                    repellat nostrum quaerat rem eaque, ea eveniet repellendus a ab blanditiis non tempora similique
                    soluta,
                    numquam aliquam?
                    soluta,
                    numquam aliquam?</p>
                <button class="btn btn-primary get-in-touch">Get in Touch...</button>
            </div>
            <div class="col-sm-6 p-img">
                <img src="{{ asset('images/principal.jpeg') }}" class="img">
            </div>
            </div>
        </section>
        <section class="offer">
            <div class="container">
                <h2 class="heading-2">What we offer?</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 15rem;">
                            <i class="fas fa-house-user offer-awesome"></i>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 15rem;">
                            <i class="fas fa-coffee offer-awesome"></i>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 15rem;">
                            <i class="fas fa-tv offer-awesome"></i>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 15rem;">
                            <i class="far fa-hand-point-up"></i>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="teacher">
            <div class="container">
                <h2 class="heading-2 ">Meet our Faculties!!!</h2>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="social">
                                            <i class="fab fa-facebook"></i>
                                            <i class="fab fa-whatsapp"></i>
                                            <i class="fab fa-google"></i>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/second.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="social">
                                            <i class="fab fa-facebook"></i>
                                            <i class="fab fa-whatsapp"></i>
                                            <i class="fab fa-google"></i>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/third.jpg') }}" class="card-img-top" alt="...">
                                        <div class="social">
                                            <i class="fab fa-facebook"></i>
                                            <i class="fab fa-whatsapp"></i>
                                            <i class="fab fa-google"></i>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <img src="{{ asset('images/first.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Some quick example text to build on the card
                                                title
                                                and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>
