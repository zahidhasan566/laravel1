<!DOCTYPE html>
<html lang="en">
<head>

<title>Register </title>

<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/register.css">
</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Don't have an account Sign up here!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" >Service Provider</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" >Customer</a>
                            </li>
                        </ul>
                         <form method="post">
                         {{csrf_field()}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Service Provider</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" name="username" />
                                            <br> {{$errors->first('username')}}
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City *"  name="city" />
                                            <br> {{$errors->first('city')}}
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="password" name="password" />
                                            <br> {{$errors->first('password')}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female"> 
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                            <br> {{$errors->first('email')}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                   
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone *"  />
                                            <br> {{$errors->first('phone')}}
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl"><p> Service: </p>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="skill" value="cleaner" checked>
                                                    <span> Cleaner </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="skill" value="mechanic"> 
                                                    <span>Mechanic </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="skill" value="electrician"> 
                                                    <span>Electrician </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Price " name="price" />
                                            <br> {{$errors->first('price')}}
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Service Description *" name="description" />
                                        </div>
                                        <input type="submit" class="btnRegister" formaction="register/servicereg" value="Register"/>
                                     
                                    </div>
                                         
                                </div>
                            </div>
                             </form>
                            

                             
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Customer</h3>
                                 <form method="post">                                        
                                 {{csrf_field()}}
                                <div class="row register-form">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username *" name="username"  />
                                            <br> {{$errors->first('username')}}
                                        </div>
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City *"  name="city"  />
                                            <br> {{$errors->first('city')}}
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="password" name="password"  />
                                            <br> {{$errors->first('password')}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female"> 
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                            <br> {{$errors->first('email')}}
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="phone" class="form-control" placeholder="Your Phone *" />
                                            <br> {{$errors->first('phone')}}
                                        </div>
                                         <div class="form-group">
                                            <input type="text" name="location" class="form-control" placeholder="Your Address *" />
                                            <br> {{$errors->first('location')}}
                                        </div>
                                        <input type="submit" class="btnRegister" formaction="register/customerreg" value="Register"/>
                                    </div>
                                   
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

