<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('assect/css/login.css')}}">
</head>

<body>
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Account Login</h1>
            </div>
            <div class="form-content">
                <form action="/api/auth/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input id="name" type="text" name="name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                        <label class="form-remember">
                            <input type="checkbox" />Remember Me
                        </label><a class="form-recovery" href="#">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pen-footer"><a href="#" target="_blank"><i class="material-icons"></i>View on
            Behance</a><a href="#" target="_blank">View on Github<i class="material-icons"></i></a>
    </div>

</body>

</html>