

document.getElementById("submit").onclick = function(){
    var email = document.getElementById("email").value;
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (email.match(validRegex)) {

    document.getElementById('email-validation').innerHTML = "You introduced a valid email address";

    }
    else{
        document.getElementById('email-validation').innerHTML = "You introduced an invalid email address";
    }

if (password1.length < 8) {

    document.getElementById('password1-validation').innerHTML = "Your password should be at least 8 characters long";
    
    }
    else{
        document.getElementById('password1-validation').innerHTML = "You introduced a valid password";
    }
        
if (password1 != password2) {
    document.getElementById('password2-validation').innerHTML = "Your password don't match";    
    }
  
};


//document.getElementById("about").style.color = rgb(107, 7, 7);
