<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/foxholder.css" />
    <script src="./jquery/jquery.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <script src="./jquery/foxholder.js"></script>
   
</head>

<body>
    <div class="login-form">
        <div class="container">
            <div class="container-left">
                <!-- Top section -->
                <h1>Debate</h1>
                <h2>Login to continue</h2>
                <button id="fb-login-btn">Login with Facebook</button><br>
                <a href="#" class="form-links">OR WITH E-MAIL</a>
                <!-- Forms section -->
                <form >
                <div class="form-input">
                    <input class="login-input" type="email" class="form-links" placeholder="Enter e-mail here" /><br>
                    <input class="login-input" type="password" placeholder="Enter password here" required /><br>
                    </div>
                    <div class="lower-form" style="margin:10px">
                            <input id="checkbox--remember-me" type="checkbox" name="rememberMe" value="Remember Me">
                                <label for="checkbox--remember-me" style="height:2px;">
                                    Remember Me
                                </label>
                            <a href="#" id="forgot-password" class="form-links">Forgot Password?</a><br>
                    </div>
                    <button class="form-login-btn" type="submit">Login</button><br>
                    <div style="margin:5px;">
                        <a href="#" id="create-account" class="form-links">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>