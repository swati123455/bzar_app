// Show loading spinner and then display the receipt popup
function showLoading(event) {
    event.preventDefault(); // Prevent form submission by default

    // Get all input fields in the form
    const form = document.getElementById("paymentForm");
    const requiredFields = form.querySelectorAll("[required]");
    
    // Check if any required field is empty
    for (let field of requiredFields) {
        if (!field.value) {
            alert("Please fill in all the required details before proceeding to checkout.");
            return; // Exit the function if any required field is empty
        }
    }

    // Show loading spinner
    document.getElementById("loadingSpinner").style.display = "flex";

    // Simulate a delay for payment processing (e.g., 2 seconds)
    setTimeout(() => {
        // Simulate payment processing result
        const paymentSuccessful = true; // You can replace this with actual payment success condition

        if (paymentSuccessful) {
            // Hide loading spinner and show the receipt popup with payment details
            document.getElementById("loadingSpinner").style.display = "none";
            const transactionId = "TXN123456"; // Example transaction ID
            const amountPaid = "100.00"; // Example amount
            document.getElementById("receiptDetails").innerHTML = `
                <p>Payment Successful!</p>
                <p>Transaction ID: ${transactionId}</p>
                <p>Amount Paid: $${amountPaid}</p>
            `;
            document.getElementById("receiptPopup").style.display = "block";
        } else {
            // Handle payment failure
            document.getElementById("loadingSpinner").style.display = "none";
            alert("Payment failed. Please try again.");
        }
    }, 2000); // 2000 milliseconds = 2 seconds
}

// Close the receipt popup
function closePopup() {
    document.getElementById("receiptPopup").style.display = "none";
}

// Card number formatting
let cardNumInput = document.querySelector('#cardNum');
cardNumInput.addEventListener('keyup', () => {
    let cNumber = cardNumInput.value;
    cNumber = cNumber.replace(/\s/g, ""); // Remove spaces

    if (Number(cNumber)) {
        // Split the number into groups of 4 digits and join with spaces
        cNumber = cNumber.match(/.{1,4}/g);
        cNumber = cNumber.join(" ");
        cardNumInput.value = cNumber;
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
// Recipe redirection logic (unchanged)
const recipesMap = {
    "lamb machboose": "LambMachboose.html",
    "chicken machboose": "ChickenMachboose.html",
    "muhammar": "Muhammar.html",
    "thareed": "Thareed.html",
    "madrooba": "Madrooba.html",
    "shrimp biryani": "ShrimpBiryani.html",
    "chicken saloona": "ChickenSaloona.html",
    "lamb saloona": "LambSaloona.html",
    "fish biryani": "FishBiryani.html",
    "harees": "Harees.html",
    "balaleet": "Balaleet.html",
    "cheese sambosa": "CheeseSambosa.html",
    "shakshuka": "Shakshuka.html",
    "khanfaroosh": "Khanfaroosh.html",
    "honey lugaimat": "HoneyLugaimat.html",
    "debs lugaimat": "DebsLugaimat.html",
    "custard": "Custard.html",
    "mahalabia aish": "MahalabiaAish.html",
    "red tea": "RedTea.html",
    "rose milk": "RoseMilk.html",
    "hiso": "Hiso.html",
    "karak": "Karak.html",
    "arabic coffee": "ArabicCoffee.html"
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
