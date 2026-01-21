

document.addEventListener("DOMContentLoaded", function() {
    const whoWeAre = document.querySelector('.who-we-are');

    // Function to check if element is in view
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to add visible class
    function checkVisibility() {
        if (isElementInViewport(whoWeAre)) {
            whoWeAre.classList.add('visible');
        }
    }

    // Check on scroll and load
    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('load', checkVisibility);

    // --- Fade-in effect for paragraphs on load
    const paragraphs = document.querySelectorAll('.fade-in');
    paragraphs.forEach(function (p) {
        p.classList.add('fade-in-visible');
    });

    // --- Fade-in on scroll
    window.addEventListener('scroll', function () {
        const fadeElements = document.querySelectorAll('.fade-in');
        const windowHeight = window.innerHeight;

        fadeElements.forEach(function (element) {
            const position = element.getBoundingClientRect().top;
            if (position - windowHeight <= -100) {
                element.classList.add('fade-in-visible');
            }
        });
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

        document.addEventListener("click", (e) => {
            if (!userDropdown.contains(e.target)) {
                userDropdown.classList.remove("show-dropdown");

                if (dropdownIcon) {
                    dropdownIcon.style.transform = "rotate(0deg)";
                }
            }
        });
    }
});

function SignUp() {
    window.location.href = "LoginandSignup.php";
}

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

function redirectToRecipe(event) {
    event.preventDefault(); // Prevent form submission
    const query = document.getElementById('searchBar').value.toLowerCase();
    const recipePage = recipesMap[query];

    if (recipePage) {
        window.location.href = recipePage; // Redirect to the matched recipe page
    } else {
        alert("Recipe not found. Please try again.");
    }
}


