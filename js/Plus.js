document.addEventListener("DOMContentLoaded", function() {
    const basicPlanButton = document.querySelector('.basic-plan .subscribe-button');
    const advancedPlanButton = document.querySelector('.advanced-plan .subscribe-button');

    // Redirect function for subscription
    function redirectToSubscription() {
        window.location.href = 'Subscription.html';
    }

    if (basicPlanButton) {
        basicPlanButton.addEventListener('click', redirectToSubscription);
    }

    if (advancedPlanButton) {
        advancedPlanButton.addEventListener('click', redirectToSubscription);
    }
});
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