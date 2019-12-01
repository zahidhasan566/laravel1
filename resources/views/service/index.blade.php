<!DOCTYPE html>
<html lang="en">
<head>

<title>Register </title>

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
                        <p> Register up your service here!</p>

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
                                <h3 class="register-heading">Service Details </h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           SPID :  <input type="text" class="form-control" placeholder="{{$service['spid']}}"*"name="spid"></td>
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{$service['servicename']}}*"  name="sname" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" value="{{$service['price']}}" name="price" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{$service['description']}}" name="des" />
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">


                                        <input type="submit" class="btnRegister"  value="UPDATE "/>
                                            <div >


                                               </td> <a href="" class="nav-link">Back </a>

                                            </div>

                                    </div>
                                </div>
                            </div>
                             </form>





</body>
</html>

