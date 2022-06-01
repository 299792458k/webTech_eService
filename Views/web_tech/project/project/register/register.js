function emailCheck() {
   var email = document.getElementById('user-email');
   var validRegex =  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
   if(!email.value.match(validRegex)) {
       document.getElementById('email-inform').style.display = "block";
   }
   else {
    document.getElementById('email-inform').style.display = "none";
   }
}

function passwordCheck() {
    var password = document.getElementById('user-password').value;
    var size = password.length;
    if(size < 6) {
        document.getElementById('password-inform').style.display = "block";
    }
    else {
        document.getElementById('password-inform').style.display = "none";
    }
}

function passwordRecheck() {
    var password = document.getElementById('user-password').value;
    var passwordCheck = document.getElementById('user-password-check').value;

    if(password !== passwordCheck) {
        document.getElementById('password-check-inform').style.display = "block";
    }
    else {
        document.getElementById('password-check-inform').style.display = "none";
    }
}