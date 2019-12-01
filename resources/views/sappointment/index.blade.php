<!DOCTYPE html>
<html lang="en">
<head>

<title>Appointment </title>

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
                        <p>Don't have an appointment Create on here!</p>

                 </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" >Appointment</a>
                            </li>

                        </ul>
                         <form method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Appointment Approval </h3>



                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <h6>CUSTOMER ID <td><input type="text" class="form-control" placeholder="{{$sapp2['cid']}}" name="cid"></td> </h6>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{$sapp2['location']}}*"  name="city" />
                                        </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{$sapp2['time']}}*" name="time" />
                                        </div>



                                        <input type="submit" class="btnRegister" formaction="{{ route('saccept.index', $user['userid']) }}" value="Accept" name="accept"/>
                                        <input type="submit" class="btnRegister" formaction="{{ route('sreject.index', $user['userid']) }}" value="Reject" name="reject"/>
                                    </div>
                                    <div class="form-group">


                                        <a href="{{ route('home.index', $user['userid']) }}" class="nav-link">Back </a>

                                    </div>
                                </div>
                            </div>

                             </form>





                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>

