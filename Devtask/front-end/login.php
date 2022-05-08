<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./login-signup.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="panels-container">
            <div class="panel">
                <div class="content">
                    <h4>NEW HERE ?</h4>
                    <p>
                        JOIN THE TEAM BY SIGNING UP
                    </p>
                    <a href="./signup.php">
                        <button class="btn transparent" id="sign-up-btn">
                            SIGN UP
                        </button></a>
                </div>
            </div>
        </div>
        <div class="login">
            <!-- Login block -->
            <div class="w3-animate-zoom">
                <form onsubmit="">
                    <h2 class="title">LOGIN</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" id="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" required />
                    </div>
                    <button class="btn" id="Login">LOGIN</button>
                </form>
            </div>

        </div>
        
    </div>
</body>

</html>