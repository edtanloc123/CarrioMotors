<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>CARRIO MOTORS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <script src="{{ asset('user/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Favicon -->
    <link href="{{ asset('user') }}/images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <script>
        $(document).ready(function() {
            $('#buttonLocation').change(function() {
                var select = $('#buttonLocation option:selected').val();
                console.log(select);
                if (select == 0) {
                    alert('Hiện không có showroom nào');
                }
            });
            //         $('#textboxAutoComplete').autocomplete({
            //         source: "{{ url('/home/autocomplete') }}",
            //         select: function( event, ui ) {
            //     console.log( "Selected: " + ui.item.value );
            //     //de redirect  dung location.href
            //     location.href = "{{ url('/home/search') }}?keyword= " + ui.item.value;
            //   }
            // });
            $('#buttonSubmit').click(function() {
                var email = $('#textBoxEmail').val();
                console.log(email);
            });
        });
    </script>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <!-- <div class="card-body pt-0">
<div class="row">
<div class="col-7">
<h2 class="lead" style="color:white"><b>{{ isset($email) ? $email : '' }}</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="{{ asset('user/images/user.png') }}" height="50" width="50" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div> -->
                    <!-- <a class="text-body pl-3" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <a style="text-decoration: none ;" href="{{ url('/home/index') }}">
                        <h1 class="text-uppercase text-primary mb-1">CARRIO MOTORS</h1>
                    </a>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ url('home/index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/aboutus/index') }}" class="nav-item nav-link">About</a>
                        <a href="{{ url('/service/index') }}" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="{{ url('/carlisting/index') }}" class="nav-link ">Car Listing</a>

                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ url('/register/index') }}" class="dropdown-item">Register</a>
                                <a href="{{ url('/admin/login/index') }}" class="dropdown-item">Login</a>
                            </div>
                        </div>
                        <a href="{{ url('/contact/index') }}" class="nav-item nav-link">Contact</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <form method="get" action="{{ url('home/search#findyourcar') }}">
            <div class="row mx-n2">
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">

                    <select name="value" class="custom-select px-4 mb-3" style="height: 50px;">
                        <option value="0">Pick Your Brand</option>
                        @foreach ($brand as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brandname }}</option>
                        @endforeach
                    </select>

                </div>
                <!-- <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="custom-select px-4 mb-3" style="height: 50px;">
                    <option selected>Drop Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                        data-target="#date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="time mb-3" id="time" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                        data-target="#time" data-toggle="datetimepicker" />
                </div>
            </div>  -->
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <input type="text" placeholder="Search a car ..." name="keyword" style="height: 50px;">

                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <button class="btn btn-primary btn-block mb-3" type="submit"
                        style="height: 50px;">Search</button>
                </div>

            </div>
        </form>
    </div>
    <!-- Search End -->


    <!-- Carousel Start -->
    @yield('content')


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('user') }}/images/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>info@example.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private
                        Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term &
                        Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New
                        Member Registration</a>
                    <a class="text-body mb-2" href="#"><i
                            class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return
                        & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help &
                        FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-1.jpg"
                                alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-2.jpg"
                                alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-3.jpg"
                                alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-4.jpg"
                                alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-5.jpg"
                                alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="{{ asset('user') }}/images/gallery-6.jpg"
                                alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr
                    sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <form action="{{ url('/login/index') }}" method="post">
                            <input type="text" id="textBoxEmail" name="email"
                                class="form-control bg-dark border-dark" style="padding: 25px;"
                                placeholder="Your Email">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-primary text-uppercase px-3" id="buttonSubmit"
                                    value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="{{ url('/home/index') }}">carriomotors.com.vn</a>. All
            Rights Reserved.</p>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('user/js/main.js') }}"></script>

</body>
<input type="text" name="" id="">

</html>
