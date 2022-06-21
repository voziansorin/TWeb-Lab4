<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Caesar cipher</title>
</head>
<body>
    <h1>Caesar cipher</h1>
    <div id="container">
        <button><a href="index.php">Home</a></button>
        <button><a href="vernam.php">Vernam cipher</a></button>
        <button><a href="vigenere.php">Vigenere cipher</a></button>
    </div>
    <input id="pt" type="text" placeholder="Type here your text(result will not be case accurate)">
    <input id="password" type="text" placeholder="Password">


    <button id="encode">Encryption</button>
    <button id="decode">Decryption</button>

    <p id="res"></p>

    <p class="indent">
        In cryptography, a Caesar cipher, also known as Caesar's cipher, the 
        shift cipher, Caesar's code or Caesar shift, is one of the simplest 
        and most widely known encryption techniques. It is a type of substitution 
        cipher in which each letter in the plaintext is replaced by a letter some 
        fixed number of positions down the alphabet. For example, with a left shift 
        of 3, D would be replaced by A, E would become B, and so on. The method is 
        named after Julius Caesar, who used it in his private correspondence.
    </p>
    <p class="indent">
        The encryption step performed by a Caesar cipher is often incorporated as part of 
        more complex schemes, such as the Vigenère cipher, and still has modern application 
        in the ROT13 system. As with all single-alphabet substitution ciphers, the Caesar 
        cipher is easily broken and in modern practice offers essentially no communications 
        security.
    </p>
    <script src="caesar.js"></script>

    <?php
    require_once("foot.php");
    ?>
</body>

</html>