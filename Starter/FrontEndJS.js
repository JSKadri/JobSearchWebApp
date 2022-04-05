//Front End - Java Script for Group Project
//Code created by Katherine Morozov

//For Desktop

//For Mobile
/* Display the dropdown when the nav bar is clicked in mobile view */
$(document).ready(function(){
    $(' .menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');       // Everything in the NAV should appear on click
        $('.nav ul').toggleClass('showing');    // NAV + UL should appear on click
    });
});

//Giving User-based Privileges -> add to the backend.