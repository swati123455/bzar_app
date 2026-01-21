document.addEventListener("DOMContentLoaded", function () {
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


