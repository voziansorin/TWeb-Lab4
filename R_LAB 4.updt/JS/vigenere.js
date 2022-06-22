
document.getElementById("encode").onclick = function() {
    let result = ""
    var message = document.getElementById("pt").value;
    var password = document.getElementById("password").value;
    for (let i = 0; i < message.length; i++)
    {
        message = message.toUpperCase();
        password = password.toUpperCase();
        char = message[i];
        if (char.charCodeAt(0) == 32)
        {
            result += " ";
        }
        else
        {
            result += String.fromCharCode(((char.charCodeAt(0) + 
            + (password.charCodeAt(i % password.length) - 65)) - 65) % 26 + 65);
        }
    }
    document.getElementById('res').innerHTML = "Your encoded message is: " + result;

    };



document.getElementById("decode").onclick = function() {
    let result = ""
    var message = document.getElementById("pt").value;
    var password = document.getElementById("password").value;
    for (let i = 0; i < message.length; i++)
    {
        message = message.toUpperCase();
        password = password.toUpperCase();
        char = message[i];
        if (char.charCodeAt(0) == 32)
        {
            result += " ";
        }
        else
        {
           // result += String.fromCharCode((char.charCodeAt(0) - password - 65) % 26 + 65);
           let key = 26 - password.charCodeAt(i % password.length) + 65;
           result += String.fromCharCode(((char.charCodeAt(0) + 
           key - 65) % 26) + 65);
        }
    }
    document.getElementById('res').innerHTML = "Your decoded message is: " + result;

    };
