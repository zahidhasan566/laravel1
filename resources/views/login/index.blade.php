<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login </title>

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body>
<div class="login-form">
    <form method="post" >

  <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" class="form-control" name="username"></td>
          <td> {{$errors->first('username')}}</td>

      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" class="form-control" name="password"></td>
          <td> {{$errors->first('password')}}</td>
      </tr>




    </table>
     <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
           <td> <a href="#" class="forgot-link">Forgot Password?</a></td>
        </div>

        <input type="submit" class="btn btn-primary btn-block btn-lg"  name="submit" value="Login">

  </form>
    <div class="text-center small">Don't have an account? <a href="../register">Sign up</a></div>
</div>
</body>
</html>

