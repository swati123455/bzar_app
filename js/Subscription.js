// Show loading spinner and then display the receipt popup
function showLoading(event) {
    // Prevent form submission until everything is done
    event.preventDefault();

    // Get the payment form element
    const form = document.getElementById("paymentForm");
    // Select all required input fields within the form
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

    // Delay for 5 seconds before showing the popup
    setTimeout(() => {
        // Get selected plan
        const planElement = document.getElementById("plan");
        const selectedPlan = planElement.options[planElement.selectedIndex].text;

        // Prepare the receipt details based on the selected plan
        const receiptDetails = `
            Plan: ${selectedPlan} <br>
            Amount: ${selectedPlan.includes("Monthly") ? "19.99 Qar" : "99.99 Qar"}
        `;
        // Display the receipt details in the popup
        document.getElementById("receiptDetails").innerHTML = receiptDetails;

        // Hide loading spinner and show the receipt popup
        document.getElementById("loadingSpinner").style.display = "none";
        document.getElementById("receiptPopup").style.display = "block";

        // Redirect to payment success page after the popup is displayed for 3 seconds
        setTimeout(() => {
            // Now submit the form or redirect manually
            form.submit();  // Submit the form
            // Alternatively, you can use: window.location.href = "paymentSuccess.html"; for manual redirect
        }, 3000); // Wait 3 seconds before submitting or redirecting
    }, 5000); // 5000 milliseconds = 5 seconds for simulating payment processing delay
}

// Close the popup
function closePopup() {
    // Hide the receipt popup
    document.getElementById("receiptPopup").style.display = "none";
}

// Card number formatting function
let cardNumInput = document.querySelector('#cardNum');
cardNumInput.addEventListener('keyup', () => {
    let cNumber = cardNumInput.value; // Retrieve the current input value
    // Remove all whitespace from the input
    cNumber = cNumber.replace(/\s/g, "");

    // Check if the value is a valid number
    if (Number(cNumber)) {
        // Format the card number by adding spaces every 4 digits
        cNumber = cNumber.match(/.{1,4}/g); // Split into chunks of 4 characters
        cNumber = cNumber.join(" "); // Join chunks with a space
        cardNumInput.value = cNumber; // Update the input field with the formatted number
    }
});

document.getElementById("cvv").addEventListener("input", function() {
    let cvv = this.value;
    if (cvv.length > 3) {
        this.value = cvv.slice(0, 3); // Truncate the value to 3 digits
    }
});

// Form submit event to trigger showLoading()
document.getElementById("paymentForm").addEventListener("submit", showLoading);

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