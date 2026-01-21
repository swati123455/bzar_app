document.addEventListener("DOMContentLoaded", function() {
    // Navigation links
    document.querySelector("a[href='#about']").addEventListener("click", function() {
        window.location.href = "About-Us.html";
    });

    document.querySelector("a[href='#plus']").addEventListener("click", function() {
        window.location.href = "Plus.html";
    });

    document.querySelector("a[href='#booking']").addEventListener("click", function() {
        window.location.href = "Booking.html";
    });

    // Add more navigation links as needed
});

function SignUp(){
    window.location.href = "LoginandSignup.html";
}

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

function viewCertificate(imageSrc) {
    const modal = document.getElementById('certificateModal');
    const modalImage = document.getElementById('modalImage');
    
    modalImage.src = imageSrc; // Set the clicked certificate image in the modal
    modal.style.display = 'flex'; // Show the modal
}

function closeModal() {
    const modal = document.getElementById('certificateModal');
    modal.style.display = 'none'; // Hide the modal
}




