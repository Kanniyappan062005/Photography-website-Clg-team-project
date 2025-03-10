
var overlay = document.getElementById("popup-overlay");  // Correct ID
var signin = document.getElementById("popup-signin");  // Correct ID
var signinclose = document.getElementById("sign-in-close");  // Correct ID
var navbarsigninbtn = document.getElementById("navbar-signin-btn");  // Ensure this exists in HTML
var tickbox = document.querySelector(".tick-box")

// Show popup on clicking sign-in button
navbarsigninbtn.addEventListener("click", function () {
    overlay.classList.remove("hidden");
    signin.classList.remove("hidden");
});

// Close popup when clicking the close button
signinclose.addEventListener("click", function () {
    overlay.classList.add("hidden");  
    signin.classList.add("hidden");  
});

// Close popup when clicking outside the sign-in box
overlay.addEventListener("click", function () {
    overlay.classList.add("hidden");  
    signin.classList.add("hidden");  
});

tickbox.addEventListener("click", function (){
    tickbox.textContent="✅"
})
