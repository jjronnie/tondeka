
// Get the register form and register button elements from the DOM
//creating a global variable
var registerForm = document.getElementById("registerForm");
  registerForm = document.getElementById("registerForm");
const registerButton = document.getElementById("registerButton");

// Show the register form when the register button is clicked
registerButton.addEventListener('click', () => {
    registerForm.style.display = "block";
});

// Array to store registered users' information
const registeredUsers = [];

// Function to register a new user
function register() {
    // Get input values from the form
    let firstName = document.getElementById('firstName').value;
    let lastName = document.getElementById('lastName').value;
    let eMail = document.getElementById('eMail').value;
    let password = document.getElementById('password').value;

    // Create a new user object
    const newUser = {
        newUserFirstName: firstName,
        newUserLastName: lastName,
        newUserEmail: eMail,
        newUserPassword: password,
    };

    // Add the new user to the registered users array
    registeredUsers.push(newUser);

    // Display an alert to the user
    alert(`Dear ${firstName}, Your info has been registered`);

    // Clear the form fields
    clearForm();
}

// Function to clear form fields after registration
function clearForm() {
    // Clear input values
    document.getElementById('firstName').value = "";
    document.getElementById('lastName').value = "";
    document.getElementById('eMail').value = "";
    document.getElementById('password').value = "";
}

// Get the login button and login form elements from the DOM
const loginButton = document.getElementById("loginButton");
const loginForm = document.getElementById("loginForm");

// Show the login form when the login button is clicked
loginButton.addEventListener('click', () => {
    loginForm.style.display = "block";
});

// Get the cancel button and register form elements from the DOM
const cancelButton = document.getElementById("cancelButton");
registerForm = document.getElementById("registerForm");
// Hide the register form when the cancel button is clicked
cancelButton.addEventListener('click', () => {
    registerForm.style.display = "none";
});

// Get the cancel button and login form elements from the DOM
const logCancelButton = document.getElementById("logCancelButton");
const logForm = document.getElementById("loginForm");
// Hide the login form when the cancel button is clicked
logCancelButton.addEventListener('click', () => {
    logForm.style.display = "none";
});

// Get the back-to-top button element from the DOM
const backToTopButton = document.getElementById("back-to-top");

// Show the back-to-top button when the user scrolls down 20px from the top of the document
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
};

// Scroll to the top of the document when the back-to-top button is clicked
backToTopButton.addEventListener("click", () => {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});

// Function to display the book now section when the bookNow button is clicked
function showSection() {
    const section = document.getElementById('book');
    section.style.display = 'block'; // Display the section
    section.scrollIntoView(); // Scroll to the section
}








// Array to store recorded bookings
const recordedBookings = [];

// Function to register a new TOURIST
function recordBooking() {
    // Get input values from the form
    let fullName = document.getElementById('Tname').value;
    let email = document.getElementById('Temail').value;
    let Tdate = document.getElementById('tour_date').value;
    let destination = document.getElementById('destination').value;

    // Create a new user object
    const newTourist = {
        newTouristFullname: fullName,
        newTouristemail: email, 
        newTouristTdate:Tdate,
        newTouristdestination: destination,

    };

    // Add the new TOURISTto the registered users array
    recordedBookings.push(newTourist);

    // Display an alert to the user
    alert(`Dear ${fullName}, Your info has been registered`);

    // Clear the form fields
    clearForm();
}

// Function to clear form fields after registration
function clearForm() {
    // Clear input values
    document.getElementById('Tname').value = "";
    document.getElementById('Temail').value = "";
    document.getElementById('tour_date').value = "";
    document.getElementById('destination').value = "";
}







document.addEventListener('DOMContentLoaded', function() {
    var messages = [
        "Welcome to Horizon Trips and Tours",
        "Your Gateway to African Adventure!",
        "Your Gateway to African Adventure!"
    ]; // Array of messages to be typed
    var speed = 50; // Typing speed in milliseconds
    var index = 0;
    var welcomeMessage = document.getElementById("welcome-messageh1");
    var paragraph = document.getElementById("welcome-messageP");
  
    function typeWriter(element, message) {
      var i = 0;
      var timer = setInterval(function() {
        if (i < message.length) {
          element.innerHTML += message.charAt(i);
          i++;
        } else {
          clearInterval(timer);
          setTimeout(function() {
            element.innerHTML = "";
            typeWriter(element, message); // Start typing the message again
          }, 9000); // Delay before starting next message
        }
      }, speed);
    }

  //function for welcome to horizon animation
    function startTyping() {
      typeWriter(welcomeMessage, messages[index]);
      setTimeout(function() {
        typeWriter(paragraph, messages[(index + 1) % messages.length]);
      }, messages[index].length * speed + 1000); // Delay before starting next message
      index = (index + 1) % messages.length;
    }
  
    // Start the typing animation
    startTyping();
  });




  function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
  }
