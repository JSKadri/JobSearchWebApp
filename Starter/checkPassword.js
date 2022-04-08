/* This script is based off of w3schools implementation --> https://www.w3schools.com/howto/howto_js_password_validation.asp */

var password = document.getElementById("password");
var confirmPassword = document.getElementById("cpassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var match = document.getElementById("match");
var special = document.getElementById("special");

// When the user clicks on the password field, show the message box
password.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
confirmPassword.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
    
// When the user clicks outside of the password field, hide the message box
password.onblur = function() {
    document.getElementById("message").style.display = "none";
}
confirmPassword.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
password.onkeyup = function() {

    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(password.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(password.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(password.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if(password.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }

    // Validate password
    if(password.value == confirmPassword.value) {
        match.classList.remove("invalid");
        match.classList.add("valid");
    } else {
        match.classList.remove("valid");
        match.classList.add("invalid");
    }

    // Validate special characters
    var specialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
    if(password.value.match(specialCharacters)) {
        special.classList.remove("invalid");
        special.classList.add("valid");
    } else {
        special.classList.remove("valid");
        special.classList.add("invalid");
    }
}

confirmPassword.onkeyup = function() {
    // Validate password
    if(password.value == confirmPassword.value) {
        match.classList.remove("invalid");
        match.classList.add("valid");
    } else {
        match.classList.remove("valid");
        match.classList.add("invalid");
    }
}

function showPassword() {
    var password = document.getElementById("pass");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
  }