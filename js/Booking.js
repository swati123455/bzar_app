document.addEventListener("DOMContentLoaded", function () {
    // --- Booking buttons
    const onlineCalendarButton = document.querySelector('.online-booking');
    const personalCalendarButton = document.querySelector('.personal-booking');
    const termsCheckbox = document.getElementById("terms-checkbox");
    const termsContainer = document.getElementById("terms-container");
    const proceedButton = document.getElementById("proceed-button");

    // Flag to check if terms have been agreed to
    let termsAgreed = false;

    // Online booking button
    if (onlineCalendarButton) {
        onlineCalendarButton.addEventListener('click', function (e) {
            if (!termsAgreed) {
                alert("You must agree to the terms and conditions to proceed with the booking.");
                termsContainer.scrollIntoView({ behavior: "smooth" }); // Scroll to terms section
                e.preventDefault();
            } else {
                // Redirect to Online Calendar after terms are agreed
                window.location.href = 'Online-calendar.php';
            }
        });
    }

    // Personal booking button
    if (personalCalendarButton) {
        personalCalendarButton.addEventListener('click', function (e) {
            if (!termsAgreed) {
                alert("You must agree to the terms and conditions to proceed with the booking.");
                termsContainer.scrollIntoView({ behavior: "smooth" }); // Scroll to terms section
                e.preventDefault();
            } else {
                // Redirect to Personal Calendar after terms are agreed
                window.location.href = 'Personal-calendar.php';
            }
        });
    }

    // Enable/Disable the proceed button based on checkbox state
    termsCheckbox.addEventListener('change', function () {
        if (termsCheckbox.checked) {
            proceedButton.disabled = false; // Enable button when checkbox is checked
        } else {
            proceedButton.disabled = true; // Disable button when checkbox is unchecked
        }
    });

    // Proceed button click handler
    proceedButton.addEventListener('click', function () {
        if (!termsCheckbox.checked) {
            alert("You must agree to the terms and conditions to proceed.");
            termsContainer.scrollIntoView({ behavior: "smooth" }); // Scroll to terms section
        } else {
            // Smooth scroll to the top of the page
            window.scrollTo({ top: 0, behavior: "smooth" });

            // Set terms agreed flag to true
            termsAgreed = true;
        }
    });

    
    
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
