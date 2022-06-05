<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
            <label class="tab">Register</label>
            <a href="login.php"><label class="tab">Sign In</label></a>=
            <div class="login-form" method="post" action="register.php">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                               type="text" name="username" value="">
                    </div>
                    <div class="group">
                        <label for="user" class="label">Email Address</label>
                        <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                               type="email" name="email" value="">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                               type="password" name="password_1">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input style="width: 100%; color: #c1b2a0; display: block;border: none;padding: 15px 20px;
                        border-radius: 25px; background-color: #634f4b; opacity: .4; z-index: 100;"
                               type="password" name="password_2">
                    </div>
                    <div class="group" style="margin-top: 30px">
                        <input type="submit" class="button" value="Sign Up">
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
