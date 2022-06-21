<?php

session_start();

    include("database.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];


        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            
            $query = "select * from users where user_email = '$email' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {   
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location:index.php");
                        die;
                    }
                }
            }
            echo"Please enter valid information";

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
    <link rel="stylesheet" href="styles.css">

    <title>Sign In</title>
</head>
<body>
    <h1>Sign In</h1>

    <div id="form">

    <form method ="post">

    <input id="email" type="text" placeholder="Email" name="email">
    <p id="email-signin"></p>
    <input id="password1" type="password" placeholder="Password" name="password">
    <p id="password-signin"></p>
    <button id="submit">Submit</button>

    </form>

    </div>


    <script src="signin.js"></script>

    <?php
    require_once("foot.php");
    ?>
</body>
</html>