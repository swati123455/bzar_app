document.addEventListener("DOMContentLoaded", () => {
    // === Serving count logic ===
    const servingCount = document.getElementById("serving-count");
    const decreaseButton = document.getElementById("decrease-serving");
    const increaseButton = document.getElementById("increase-serving");
    const ingredientQuantities = document.querySelectorAll("[data-quantity]");
    let servings = 4;

    function updateIngredients() {
        ingredientQuantities.forEach((element) => {
            const baseQuantity = parseFloat(element.getAttribute("data-quantity"));
            element.textContent = (baseQuantity * servings / 4)
                .toFixed(2)
                .replace(/\.00$/, "");
        });
    }

    if (decreaseButton && increaseButton) {
        decreaseButton.addEventListener("click", () => {
            if (servings > 1) {
                servings--;
                servingCount.textContent = servings;
                updateIngredients();
            }
        });

        increaseButton.addEventListener("click", () => {
            servings++;
            servingCount.textContent = servings;
            updateIngredients();
        });
    }

    updateIngredients();

    // === Fade-in effect on load ===
    const paragraphs = document.querySelectorAll('.fade-in');
    paragraphs.forEach(p => p.classList.add('fade-in-visible'));

    // === Fade-in on scroll ===
    window.addEventListener('scroll', () => {
        const fadeElements = document.querySelectorAll('.fade-in');
        const windowHeight = window.innerHeight;

        fadeElements.forEach(element => {
            const position = element.getBoundingClientRect().top;
            if (position - windowHeight <= -100) {
                element.classList.add('fade-in-visible');
            }
        });
    });

    // === Login state handling ===
    const loginButtons = document.getElementById("login");
    const userIcon = document.getElementById("user-icon");

    if (typeof isLoggedIn !== 'undefined' && isLoggedIn) {
        if (loginButtons) loginButtons.style.display = "none";
        if (userIcon) userIcon.style.display = "block";
    } else {
        if (loginButtons) loginButtons.style.display = "flex";
        if (userIcon) userIcon.style.display = "none";
    }

    // === Dropdown logic ===
    const userDropdown = document.querySelector(".user-dropdown");
    const userToggle = document.querySelector(".user-toggle");
    const dropdownIcon = document.querySelector(".dropdown-icon");

    if (userToggle && userDropdown) {
        userToggle.addEventListener("click", (e) => {
            e.stopPropagation();
            userDropdown.classList.toggle("show-dropdown");
            if (dropdownIcon) {
                dropdownIcon.style.transform = userDropdown.classList.contains("show-dropdown")
                    ? "rotate(180deg)" : "rotate(0deg)";
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

// === Outside DOMContentLoaded ===

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
    event.preventDefault();
    const query = document.getElementById('searchBar').value.toLowerCase();
    const recipePage = recipesMap[query];

    if (recipePage) {
        window.location.href = recipePage;
    } else {
        alert("Recipe not found. Please try again.");
    }
}
