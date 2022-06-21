<?php
session_start();

    include("database.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(!empty($email) && !empty($name) && !empty($message))
        {
            $query = "insert into contacts(name, email, message) values('$name', '$email', '$message')";

            mysqli_query($conn, $query);

            header("Location: contacts.php");
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

    <title>Contact</title>
</head>


<h1>Contact</h1>

<form method="post">
<div id="form">
<input id="name" type="text" placeholder="Your name" name="name">
<p></p>
<input id="email" type="text" placeholder="Email" name="email">
<p></p>
<input id="message" type="text" placeholder="Message" name="message">
<p></p>
</form>


<button id="submit">Submit</button>

</div>



<?php
require_once("foot.php");
?>
<body>
    
</body>
</html>