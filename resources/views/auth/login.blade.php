<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Login</h4>
                <hr>    
                <form action="{{route('login-user')}}" method="post">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="Username">Please Sign In</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                    </div>
                    
                    <div class="form-group">
                    <input type="Password" class="form-control" placeholder="Password" name="password">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <!-- code for inserting button to stay logged into the system -->
                    <!-- <div id="remember_me_container">
                        <input name="user[remember_me]" type="hidden" value="0"><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1">
                        <label class="login_link" for="user_remember_me" id="remember_me_label">stay signed in</label>
                    </div> -->

                    <button id="sign_in_button">
                        <span class="button_text">Sign In</span>
                    </button>
                    <br>
                    <br>
                        <a class="nav-item nav-link" href="registration">Sign Up Here</a>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>