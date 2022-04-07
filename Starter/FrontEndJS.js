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

//For the accordian in the Base Template
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[j].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } 
            else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
}
