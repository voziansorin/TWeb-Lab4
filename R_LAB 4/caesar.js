/*

lab 1: 4-5 pagini html

lab 2: css pentru aceste pagini

lab 3: 3-4 utilizari de javascript(fara biblioteci aditionale) la paginile create

lab 4: transcriere la paginile html in php,cu 3 forme, validarea pe front(cu javascript - se poate si jquery), 
validare de back(in php), apoi serverul prelucreaza si trasnmite mesaj de success sau eroare

lab 5: lab 4 de schimbat comunicarea cu serverul(requesturile) sa fie prin AJAX si de comunicat prin XML sau JSON

*/
document.getElementById("encode").onclick = function() {
    let result = ""
    var message = document.getElementById("pt").value;
    var password = parseInt(document.getElementById("password").value);
    for (let i = 0; i < message.length; i++)
    {
        message = message.toUpperCase();
        char = message[i];
        if (char.charCodeAt(0) == 32)
        {
            result += " ";
        }
        else
        {
            result += String.fromCharCode((char.charCodeAt(0) + password - 65 + 26) % 26 + 65);
        }
    }
    document.getElementById('res').innerHTML = "Your encoded message is: " + result;

    };



document.getElementById("decode").onclick = function() {
    let result = ""
    var message = document.getElementById("pt").value;
    var password = parseInt(document.getElementById("password").value);
    password = password % 26
    for (let i = 0; i < message.length; i++)
    {
        message = message.toUpperCase();
        char = message[i];
        if (char.charCodeAt(0) == 32)
        {
            result += " ";
        }
        else
        {
           // result += String.fromCharCode((char.charCodeAt(0) - password - 65) % 26 + 65);
           result += String.fromCharCode(((char.charCodeAt(0) - password - 65 + 26)) + 65);
        }
    }
    document.getElementById('res').innerHTML = "Your decoded message is: " + result;

    };
