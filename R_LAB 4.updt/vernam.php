<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Vernam cipher. One-time pad</title>
</head>
<body>
    <h1>Vernam cipher. One-time pad</h1>
    <div id="container">
        <button><a href="index.php">Home</a></button>
        <button><a href="caesar.php">Caesar cipher</a></button>
        <button><a href="vigenere.php">Vigenere cipher</a></button>
    </div>

    <input id="pt" type="text" placeholder="Type here your text(result will not be case accurate)">
    <input id="password" type="text" placeholder="Password">


    <button id="encode">Encryption</button>
    <button id="decode">Decryption</button>

    <p id="res"></p>
    
    <p class="indent">
        In cryptography, the one-time pad (OTP) is an encryption technique that cannot be cracked, 
        but requires the use of a single-use pre-shared key that is not smaller than the message 
        being sent. In this technique, a plaintext is paired with a random secret key (also referred 
        to as a one-time pad). Then, each bit or character of the plaintext is encrypted by combining 
        it with the corresponding bit or character from the pad using modular addition.
    </p>
    <p class="indent">
        The resulting ciphertext will be impossible to decrypt or break if the following four conditions are met:
        <ul>
            <li>The key must be at least as long as the plaintext.</li>
            <li>The key must be random (uniformly distributed in the set of all possible keys and independent of the plaintext),
                 entirely sampled from a non-algorithmic, chaotic source such as a hardware random number generator. It is not 
                 sufficient for OTP keys to pass statistical randomness tests as such tests cannot measure entropy, and the number 
                 of bits of entropy must be at least equal to the number of bits in the plaintext. For example, using cryptographic 
                 hashes or mathematical functions (such as logarithm or square root) to generate keys from fewer bits of entropy would 
                 break the uniform distribution requirement, and therefore would not provide perfect secrecy.</li>
            <li>The key must never be reused in whole or in part.</li>
            <li>The key must be kept completely secret by the communicating parties.</li>
        </ul>
    </p>
    <script src="JS/vernam.js"></script>

    <?php
    require_once("foot.php");
    ?>
</body>
</html>