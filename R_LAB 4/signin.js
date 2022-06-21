document.getElementById("submit").onclick = function(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (email.match(validRegex)) {}
    else{
        document.getElementById('email-signin').innerHTML = "You introduced an invalid email address";
    }

if (password.length < 8) {

    document.getElementById('password-signin').innerHTML = "Your password should be at least 8 characters long";
    
    }
}



//document.getElementById("about").style.color = rgb(107, 7, 7);
