// Front End - Java Script for Group Project
// By Katherine Morozov
// Modified by Tolulope(Tolu) Adebayo and Jawad Kadri

//For Mobile
/* Display the dropdown when the nav bar is clicked in mobile view */
$(document).ready(function(){
    $(' .menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');       // Everything in the NAV should appear on click
        $('.nav ul').toggleClass('showing');    // NAV + UL should appear on click
    });
});
