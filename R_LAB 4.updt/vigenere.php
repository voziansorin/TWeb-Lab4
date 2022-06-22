<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Vigenere cipher</title>
</head>
<body>
    <h1>Vigenere cipher</h1>
    <div id="container">
        <button><a href="index.php">Home</a></button>
        <button><a href="caesar.php">Caesar cipher</a></button>
        <button><a href="vernam.php">Vernam cipher</a></button>

    </div>
    <input id="pt" type="text" placeholder="Type here your text(result will not be case accurate)">
    <input id="password" type="text" placeholder="Password">


    <button id="encode">Encryption</button>
    <button id="decode">Decryption</button>

    <p id="res"></p>
    <p class="indent">
        The Vigenère cipher is a method of encrypting alphabetic text by 
        using a series of interwoven Caesar ciphers, based on the letters 
        of a keyword. It employs a form of polyalphabetic substitution.

        First described by Giovan Battista Bellaso in 1553, the cipher is 
        easy to understand and implement, but it resisted all attempts to 
        break it until 1863, three centuries later. This earned it the description 
        le chiffrage indéchiffrable (French for 'the indecipherable cipher'). Many 
        people have tried to implement encryption schemes that are essentially Vigenère 
        ciphers. In 1863, Friedrich Kasiski was the first to publish a general method 
        of deciphering Vigenère ciphers.

        In the 19th century the scheme was misattributed to Blaise de Vigenère 
        (1523-1596), and so acquired its present name.
    </p>
    <p class="indent">
        In a Caesar cipher, each letter of the alphabet is shifted along some number of places. 
        For example, in a Caesar cipher of shift 3, a would become D, b would become E, y would 
        become B and so on. The Vigenère cipher has several Caesar ciphers in sequence with different 
        shift values.

        To encrypt, a table of alphabets can be used, termed a tabula recta, Vigenère square or Vigenère 
        table. It has the alphabet written out 26 times in different rows, each alphabet shifted cyclically 
        to the left compared to the previous alphabet, corresponding to the 26 possible Caesar ciphers. At 
        different points in the encryption process, the cipher uses a different alphabet from one of the rows. 
        The alphabet used at each point depends on a repeating keyword.
    </p>
    <script src="JS/vigenere.js"></script>

    <?php
    require_once("foot.php");
    ?>
</body>
</html>