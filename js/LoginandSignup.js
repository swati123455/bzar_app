// Selectors for the sign-in and sign-up buttons and their respective form wrappers
const signInBtnLink = document.querySelector('.signInBtn-link'); // Button to switch to sign-in form
const signUpBtnLink = document.querySelector('.signUpBtn-link'); // Button to switch to sign-up form
const signInForm = document.querySelector('.form-wrapper.sign-in'); // Sign-in form wrapper
const signUpForm = document.querySelector('.form-wrapper.sign-up'); // Sign-up form wrapper

// Function to toggle visibility of forms based on the form type
function toggleForms(formType) {
  if (formType === 'signUp') {
    signInForm.style.display = 'none'; // Hide the sign-in form
    signUpForm.style.display = 'block'; // Show the sign-up form
  } else if (formType === 'signIn') {
    signInForm.style.display = 'block'; // Show the sign-in form
    signUpForm.style.display = 'none'; // Hide the sign-up form
  }
}

// Check if the buttons are present in the DOM before adding event listeners
if (signInBtnLink && signUpBtnLink) {
  // Add click event listener to the sign-up button
  signUpBtnLink.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default anchor behavior
    toggleForms('signUp'); // Call function to show sign-up form
  });

  // Add click event listener to the sign-in button
  signInBtnLink.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default anchor behavior
    toggleForms('signIn'); // Call function to show sign-in form

      
   // --- Show/hide login buttons based on session status
    const loginButtons = document.getElementById("login");
    const userIcon = document.getElementById("user-icon");

    if (typeof isLoggedIn !== 'undefined' && isLoggedIn) {
        if (loginButtons) loginButtons.style.display = "none";
        if (userIcon) userIcon.style.display = "block";
    } else {
        if (loginButtons) loginButtons.style.display = "flex";
        if (userIcon) userIcon.style.display = "none";
    }

    // --- Dropdown toggle and arrow rotation
    const userDropdown = document.querySelector(".user-dropdown");
    const userToggle = document.querySelector(".user-toggle");
    const dropdownIcon = document.querySelector(".dropdown-icon");

    if (userToggle && userDropdown) {
        userToggle.addEventListener("click", (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle("show-dropdown");

            if (dropdownIcon) {
                dropdownIcon.style.transform = userDropdown.classList.contains("show-dropdown")
                    ? "rotate(180deg)"
                    : "rotate(0deg)";
            }
        });
    }

    // --- Recipe search redirect
    const recipesMap = {
        "lamb machboose": "LambMachboose.php",
        "chicken machboose": "ChickenMachboose.php",
        "muhammar": "Muhammar.php",
        "thareed": "Thareed.php",
        "madrooba": "Madrooba.php",
        "shrimp biryani": "ShrimpBiryani.php",
        "chicken saloona": "ChickenSaloona.php",
        "lamb saloona": "LambSaloona.php",
        "fish biryani": "FishBiryani.php",
        "harees": "Harees.php",
        "balaleet": "Balaleet.php",
        "cheese sambosa": "CheeseSambosa.php",
        "shakshuka": "Shakshuka.php",
        "khanfaroosh": "Khanfaroosh.php",
        "honey lugaimat": "HoneyLugaimat.php",
        "debs lugaimat": "DebsLugaimat.php",
        "custard": "Custard.php",
        "mahalabia aish": "MahalabiaAish.php",
        "red tea": "RedTea.php",
        "rose milk": "RoseMilk.php",
        "hiso": "Hiso.php",
        "karak": "Karak.php",
        "arabic coffee": "ArabicCoffee.php"
    };

    const searchForm = document.getElementById("searchForm"); 
    if (searchForm) {
        searchForm.addEventListener("submit", function (event) {
            event.preventDefault();
            const query = document.getElementById('searchBar').value.toLowerCase();
            const recipePage = recipesMap[query];

            if (recipePage) {
                window.location.href = recipePage;
            } else {
                alert("Recipe not found. Please try again.");
            }
        });
    }
});
