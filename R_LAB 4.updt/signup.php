<?php
session_start();

    include("database.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        if(!empty($email) && !empty($password1) && !empty($password2) && $password1==$password2)
        {
            $user_id = random_num(11);
            $query = "insert into users(user_id, user_email, password) values('$user_id', '$email', '$password1')";

            mysqli_query($conn, $query);

            header("Location: signin.php");
        }
        else
        {
            echo"Please enter valid information";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">

    <title>Sign In</title>
</head>
<body>
    
    <h1>Sign Up</h1>

    <div id="form">

    <form method="post">
    <input id="email" type="text" placeholder="Email" name = "email">
    <p id="email-validation"></p>
    <input id="password1" type="password" placeholder="Password" name = "password1">
    <p id="password1-validation"></p>
    <input id="password2" type="password" placeholder="Password check" name="password2">
    <p id="password2-validation"></p>

    <button id="submit">Submit</button>
    </form>

    </div>


    <script src="JS/signup.js"></script>
    <?php
    require_once("foot.php");
    ?>
</body>
</html>