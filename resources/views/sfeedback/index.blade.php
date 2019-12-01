<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hiring management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Uptown</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home.index', $user['userid']) }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('profile.index', $user['userid']) }}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{ route('sfeedback.index', $user['userid']) }}" class="nav-link">Customer Fedback </a></li>
                <li class="nav-item"><a href="{{ route('Service.show', $user['userid']) }}"class="nav-link">Services Skill </a></li>
                <li class="nav-item"><a href="{{ route('sms.index', $user['userid']) }}" class="nav-link">Sms </a></li>
                <li class="nav-item"><a href="{{ route('sappointment.index', $user['userid']) }}" class="nav-link">Appointment</a></li>
                <li class="nav-item"><a href="{{ route('Snotice.show', $user['userid']) }}" class="nav-link">Notice</a></li>
                <li class="nav-item"><a href="{{ route('logout.index')}}" class="nav-link">logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap ftco-degree-bg" style="background-image: url('/images/bg_n.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">

            <div class="text text-center">
                <h1 class="mb-4" color="blue"> <br> REVIEW YOURSELF  </h1>

            </div>

        </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</div>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading"></span>
                <h2 class="mb-2">Feedbacks </h2>
            </div>
        </div>
    </div>
</section>


<div class="list-group" align="center" >
    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <table>

            <tr>

                <th><div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">CustomerId</label>
                    </div> </th>





                <th> <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Feedback</label>
                    </div>
                </th>


            </tr>
            <hr />
            @foreach($sfeedback as $sfeedback)
                <tr>

                    <td>{{ $sfeedback->sender }}</td>
                    <td>{{ $sfeedback->feedback }}</td>
                </tr>

            @endforeach
    </div>
</div>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
