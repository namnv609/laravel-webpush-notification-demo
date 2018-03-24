<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="/css/login-form.css">
    </head>
    <body>
        <div class="wrapper">
            <form class="form-signin" method="POST" action="/login">
                {{ csrf_field() }}
                <h2 class="form-signin-heading">Please login</h2>
                @if (count($errors))
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
                <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
