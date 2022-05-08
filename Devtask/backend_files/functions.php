<?php include 'db.php'; ?>

<?php

function createRecord(){

    if(isset($_POST['submit'])){
        global $conn;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $firstname = mysqli_real_escape_string($conn, $firstname);
        $lastname = mysqli_real_escape_string($conn, $lastname);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        $epass = password_hash($password, PASSWORD_BCRYPT);

        $emailQuery = " SELECT * FROM users WHERE email = '$email'";
        $resultEmail = mysqli_query($conn, $emailQuery);

        $checkEmail = mysqli_num_rows($resultEmail);

        if ($checkEmail > 0) {
            ?>
            <script>
                alert('Email Already Exist');
            </script>
            <?php

        } else {

            $query = "INSERT INTO users(firstname, lastname, email, password) ";
            $query .= "VALUES ('$firstname', '$lastname', '$email', '$epass')";
    
            $result = mysqli_query($conn, $query);
        }

        if(!$result){
            ?>
            <script>alert('Click here to resubmit the form')</script>
            <?php
        }
        else {
            ?>
            <script>alert('Registration successful')</script>
            <?php
        }
    }
}

?>