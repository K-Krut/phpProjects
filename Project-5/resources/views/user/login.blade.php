<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
</head>
<body>

@include('includes.navigation')

<div class="body-class">
    <div class="login-wrap">
        <div class="login-html">
            <label class="tab">Sign In</label>
            <a href="register.php"><label class="tab">Register</label></a>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Email/Username</label>
                        <input style="opacity: .4;" id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input style="opacity: .4;" id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group" style="margin-top: 30px">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
