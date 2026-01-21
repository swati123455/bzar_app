document.addEventListener("DOMContentLoaded", function () {
    // --- Class selection logic ---
    const selectedClasses = [];
    const totalAmountElement = document.getElementById('total-amount');
    const selectedClassesList = document.getElementById('selected-classes');
    const checkoutButton = document.getElementById('checkout-button'); // Ensure this references your button

    // Event listener for each class item (calendar slot)
    document.querySelectorAll('.calendar li').forEach(item => {
        item.addEventListener('click', () => {
            const className = item.innerText;
            const fee = parseFloat(item.getAttribute('data-fee'));

            const classIndex = selectedClasses.indexOf(className);

            if (classIndex === -1) {
                if (selectedClasses.length < 3) {
                    selectedClasses.push(className);

                    // Add 'selected' class visually
                    item.classList.add('selected');

                    // Add to list display
                    const listItem = document.createElement('li');
                    listItem.textContent = className;
                    selectedClassesList.appendChild(listItem);
                } else {
                    alert("You can only select up to 3 classes.");
                }
            } else {
                // Deselect logic
                selectedClasses.splice(classIndex, 1);
                item.classList.remove('selected');

                // Remove from display list
                selectedClassesList.removeChild(selectedClassesList.children[classIndex]);
            }

            // Recalculate total
            const total = selectedClasses.reduce((acc, className) => {
                const classItem = Array.from(document.querySelectorAll('.calendar li')).find(li => li.innerText === className);
                return acc + (classItem ? parseFloat(classItem.getAttribute('data-fee')) : 0);
            }, 0);

            totalAmountElement.textContent = `Total: QAR ${total.toFixed(2)}`;
        });
    });

    // --- Checkout button logic ---
    checkoutButton.addEventListener('click', () => {
        if (selectedClasses.length > 0) {
            const totalAmount = totalAmountElement.textContent.replace('Total: QAR ', '');
            alert(`Proceeding to checkout with the following classes:\n${selectedClasses.join(', ')}\nTotal Amount: QAR ${totalAmount}`);
            window.location.href = 'OnlinePayment.html'; // Redirect to checkout page
        } else {
            alert("Please select at least one class before proceeding to checkout.");
        }
    });

    // --- Calendar generation logic ---
    const classList = document.querySelectorAll("#class-list li");
    const calendarGrid = document.getElementById("calendar-grid");
    const selectedClassesDisplay = document.getElementById("selected-classes");
    const totalAmountDisplay = document.getElementById("total-amount");

    let total = 0;

    // December 2028 starts on Friday → index 5 (0 = Sunday)
    const startDay = 5;
    const daysInMonth = 31;

    // Create empty slots before the 1st
    for (let i = 0; i < startDay; i++) {
        const empty = document.createElement("div");
        empty.classList.add("day-cell");
        calendarGrid.appendChild(empty);
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const cell = document.createElement("div");
        cell.classList.add("day-cell");

        // Day number
        const dayNum = document.createElement("span");
        dayNum.classList.add("day-number");
        dayNum.textContent = day;
        cell.appendChild(dayNum);

        // Find matching class
        classList.forEach(item => {
            const date = new Date(item.querySelector("time").getAttribute("datetime"));
            if (date.getDate() === day) {
                const event = document.createElement("div");
                event.classList.add("day-event");
                event.innerHTML = item.innerHTML;
                event.setAttribute("data-fee", item.getAttribute("data-fee"));
                event.addEventListener("click", () => {
                    const classDay = date.toLocaleDateString("en-US", { weekday: "short", day: "numeric" });
                    const description = item.innerHTML;
                    const fee = Number(item.getAttribute("data-fee"));
                    const newItem = document.createElement("li");
                    newItem.innerHTML = `${classDay}: ${description}`;
                    selectedClassesDisplay.appendChild(newItem);
                    total += fee;
                    totalAmountDisplay.textContent = `Total: QAR ${total}`;
                });
                cell.appendChild(event);
            }
        });

        calendarGrid.appendChild(cell);
    }

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


    // Attach the redirect function to your search form or button
    const searchForm = document.getElementById("searchForm");
    if (searchForm) {
        searchForm.addEventListener("submit", redirectToRecipe);
    }
});

// --- Signup redirect (can be outside DOMContentLoaded) ---
function SignUp() {
    window.location.href = "LoginandSignup.php";
}
