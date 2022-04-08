// Front End - Java Script for Group Project
// By Katherine Morozov
// Modified by Tolulope(Tolu) Adebayo and Jawad Kadri

//For Mobile
/* Display the dropdown when the nav bar is clicked in mobile view */
$(document).ready(function(){
    $(' .menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');       // Everything in the NAV should appear on click
    });
});

/* We check for invalid inputs after submit is pressed */
$('#checkUserLogin').click(function(){
    /* Setup Initail Varibles 
    .value will get the value of the id */
    var form = document.getElementById("form");
    var email = document.getElementById("email");
    var password = document.getElementById('password');
    var nonValid = false;

    /* Reset color back to default */
    email.style.borderColor="#ccc";
    password.style.borderColor="#ccc";

    /* Check for invalid inputs for the other textboxes */
    if(email.value == "") {
        email.style.borderColor="red";
        nonValid = true;
    }
    if(password.value == "") {
        password.style.borderColor="red";
        nonValid = true;
    }

    /* When an invalid input is detected (Make the user fix it!) */
   if(nonValid == true) {
       nonValid = false;
       alert("Missing or Invalid Field. Please fill or fix the missing content.");
       function handleForm(event) { event.preventDefault(); } 
       form.addEventListener('submit', handleForm);
    }
});

/* We check for invalid inputs after submit is pressed */
$('#checkCompanyLogin').click(function(){
    /* Setup Initail Varibles 
    .value will get the value of the id */
    var form = document.getElementById("form");
    var companyName = document.getElementById("companyName");
    var email = document.getElementById("email");
    var nonValid = false;

    /* Reset color back to default */
    companyName.style.borderColor="#ccc";
    email.style.borderColor="#ccc";

    /* Check for invalid inputs for the other textboxes */
    if(companyName.value == "") {
        companyName.style.borderColor="red";
        nonValid = true;
    }
    if(email.value == "") {
        email.style.borderColor="red";
        nonValid = true;
    }

    /* When an invalid input is detected (Make the user fix it!) */
    if(nonValid == true) {
        nonValid = false;
        alert("Missing or Invalid Field. Please fill or fix the missing content.");
        function handleForm(event) { event.preventDefault(); } 
        form.addEventListener('submit', handleForm);
    }
});

/* Displays the TextBox when user selects other in learn about us */
function checkDisplayBox(val){
    var element = document.getElementById('learn');
    if(val == 'other')
      element.style.display='inline-block';
   else
    element.style.display='none';
}

$('#checkUserRegister').click(function(){
    /* Setup Initail Varibles 
    .value will get the value of the id */
    var form = document.getElementById("form");
    var firstName = document.getElementById("firstName");
    var lastName = document.getElementById('lastName');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('cpassword');
    var nonValid = false;

    /* Reset color back to default */
    firstName.style.borderColor="#ccc";
    lastName.style.borderColor="#ccc";
    email.style.borderColor="#ccc";
    password.style.borderColor="#ccc";
    confirmPassword.style.borderColor="#ccc";

    /* Check for invalid inputs for the other textboxes */
    if(firstName.value == "") {
        firstName.style.borderColor="red";
        nonValid = true;
    }
    if(lastName.value == "") {
        lastName.style.borderColor="red";
        nonValid = true;
    }
    if(password.value == "") {
        password.style.borderColor="red";
        nonValid = true;
    }
    if(confirmPassword.value == "" || confirmPassword.value != password.value) {
        confirmPassword.style.borderColor="red";
        nonValid = true;
    }

    if(email.value == "") {
        email.style.borderColor="red";
        nonValid = true;
    }
    /* Doesn't catch all but some simple invalid emails using REGEX */
    else if(!String(email.value).toLocaleLowerCase().match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        email.style.borderColor="red";
        nonValid = true;
    }

    /* When an invalid input is detected don't submit! Make the user fix it! */
   if(nonValid == true) {
        nonValid = false;
        alert("Missing or Invalid Field. Please fill or fix the missing content.");
        function handleForm(event) { event.preventDefault(); } 
        form.addEventListener('submit', handleForm);
    } else if (letter.classList.contains('invalid') || capital.classList.contains('invalid') || number.classList.contains('invalid') || length.classList.contains('invalid') || match.classList.contains('invalid') || special.classList.contains('invalid'))
    {
        alert("Invalid Password. Please fix the missing content.");
        function handleForm(event) { event.preventDefault(); }
        form.addEventListener('submit', handleForm);
        password.style.borderColor="red";
        confirmPassword.style.borderColor="red";
    }
});

$('#checkCompanyRegister').click(function(){
    /* Setup Initail Varibles 
    .value will get the value of the id */
    var form = document.getElementById("form");
    var companyName = document.getElementById("companyName");
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('cpassword');
    var nonValid = false;

    /* Reset color back to default */
    companyName.style.borderColor="#ccc";
    email.style.borderColor="#ccc";
    password.style.borderColor="#ccc";
    confirmPassword.style.borderColor="#ccc";

    /* Check for invalid inputs for the other textboxes */
    if(companyName.value == "") {
        companyName.style.borderColor="red";
        nonValid = true;
    }
    if(password.value == "") {
        password.style.borderColor="red";
        nonValid = true;
    }
    if(confirmPassword.value == "" || confirmPassword.value != password.value) {
        confirmPassword.style.borderColor="red";
        nonValid = true;
    }

    if(email.value == "") {
        email.style.borderColor="red";
        nonValid = true;
    }
    /* Doesn't catch all but some simple invalid emails using REGEX */
    else if(!String(email.value).toLocaleLowerCase().match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        email.style.borderColor="red";
        nonValid = true;
    }

    /* When an invalid input is detected don't submit! Make the user fix it! */
    if(nonValid == true) {
        nonValid = false;
        alert("Missing or Invalid Field. Please fill or fix the missing content.");
        function handleForm(event) { event.preventDefault(); } 
        form.addEventListener('submit', handleForm);
    } else if (letter.classList.contains('invalid') || capital.classList.contains('invalid') || number.classList.contains('invalid') || length.classList.contains('invalid') || match.classList.contains('invalid') || special.classList.contains('invalid'))
    {
        alert("Invalid Password. Please fix the missing content.");
        function handleForm(event) { event.preventDefault(); }
        form.addEventListener('submit', handleForm);
        password.style.borderColor="red";
        confirmPassword.style.borderColor="red";
    }
});

/* Auto Size For Mobile */
$("textarea").each(function () {
    this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
  }).on("input", function () {
    this.style.height = "auto";
    this.style.height = (this.scrollHeight) + "px";
  });

$("#creationSubmit").click(function(){
    console.log("BUTTON CLICKED");
    var form = document.getElementById("form-job");
    var jobTitle = document.getElementById("jobtitle");
    var jobDescription = document.getElementById("jobdesc");
    var jobRequirements = document.getElementById("jobreq");
    var jobLocation = document.getElementById("jobloc");
    var nonValid = false;

    /* Reset color back to default */
    jobTitle.style.borderColor="#ccc";
    jobDescription.style.borderColor="#ccc";
    jobLocation.style.borderColor="#ccc";
    jobRequirements.style.borderColor="#ccc";

    /* Check for invalid inputs for the other textboxes */
    if(jobTitle.value == "") {
        jobTitle.style.borderColor="red";
        nonValid = true;
    }
    if(jobDescription.value == "") {
        jobDescription.style.borderColor="red";
        nonValid = true;
    }
    if(jobLocation.value == "") {
        jobLocation.style.borderColor="red";
        nonValid = true;
    }
    if(jobRequirements.value == "") {
        jobRequirements.style.borderColor="red";
        nonValid = true;
    }
 
    /* When an invalid input is detected don't submit! Make the user fix it! */
    if(nonValid == true) {
        nonValid = false;
        alert("Missing or Invalid Field. Please fill or fix the missing content.");
        function handleForm(event) { event.preventDefault(); } 
        form.addEventListener('submit', handleForm);
    } else {
        console.log("FORM SUBMITTED");
    }
});


