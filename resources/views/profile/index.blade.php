<!DOCTYPE html>
<html lang="en">
<head>

<title>Profile </title>

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>UPDATE YOUR PROFILE </p>

                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" >Service Provider</a>
                            </li>

                        </ul>
                         <form method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">WELCOME {{$user['username']}}</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            USRNAME :  <input type="text"  value=" {{$user['username']}}" name="username"></td>
                                        </div>
                                         <div class="form-group">
                                             EMAIL:  <input type="text"  value=" {{$user['email']}}" name="email"></td>
                                        </div>

                                        <div class="form-group">
                                             PHONE:  <input type="text"  value="{{$user['phone']}}" name="phone"></td>
                                        </div>
                                        <div class="form-group">
                                             GENDER:  <input type="text"  value=" {{$user['gender']}}" name="gender"></td>
                                        </div>
                                        <div class="form-group">
                                            CITY:  <input type="text"  value=" {{$user['city']}}" name="city"></td>
                                        </div>
                                        <div class="form-group">
                                            PASSWORD:  <input type="text"  value="{{$user['password']}} " name="password"></td>
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">


                                        <input type="submit" class="btnRegister" formaction="{{ route('profile.index', $user['userid']) }}" value="update"/> <br>

                                    </div>
                                        <div class="form-group">


                                            <a href="{{ route('profile.delete', $user['userid']) }}" class="nav-link">Delete </a>
                                            <a href="{{ route('home.index', $user['userid']) }}" class="nav-link">Back </a>

                                        </div>
                                </div>
                            </div>
                             </form>





</body>
</html>

