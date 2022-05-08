<?php include '../backend_files/db.php'; ?>
<?php include '../backend_files/functions.php'; ?>

<?php createRecord(); ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

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
                    <h4>ONE OF US ?</h4>
                    <p>
                        GET STARTED BY LOGGING IN! 
                    </p>
                    <a href="./login.php">
                        <button class="btn transparent" id="login-btn">
                            LOGIN
                        </button></a>
                </div>
            </div>
        </div>
        <div class="signup">

            <!-- Sign up block -->

            <div class="w3-animate-zoom">
                <form action="" method="POST">
                    <h2 class="title">SIGN UP</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Firstname" id="frstname" name="firstname" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="lastname" id="lastname" name="lastname" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="Nemail" name="email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="Npassword" name="password" required/>
                    </div>
                    <button class="btn" id="signup" name="submit">SIGN UP</button>
                </form>
            </div>
        </div>
        
    </div>
</body>

</html>