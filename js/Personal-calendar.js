// Example JavaScript code for handling class selection and total calculation
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

// Event listener for the checkout button
checkoutButton.addEventListener('click', () => {
    if (selectedClasses.length > 0) {
        const totalAmount = totalAmountElement.textContent.replace('Total: QAR ', '');
        alert(`Proceeding to checkout with the following classes:\n${selectedClasses.join(', ')}\nTotal Amount: QAR ${totalAmount}`);
        window.location.href = 'OnlinePayment.html'; // Redirect to checkout page
    } else {
        alert("Please select at least one class before proceeding to checkout.");
    }
});


document.addEventListener("DOMContentLoaded", function () {
  const classList = document.querySelectorAll("#class-list li");
  const calendarGrid = document.getElementById("calendar-grid");
  const selectedClasses = document.getElementById("selected-classes");
  const totalAmount = document.getElementById("total-amount");

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
          selectedClasses.appendChild(newItem);
          total += fee;
          totalAmount.textContent = `Total: QAR ${total}`;
        });
        cell.appendChild(event);
      }
    });

    calendarGrid.appendChild(cell);
  }
});
// Recipe search redirect
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
    event.preventDefault();
    const query = document.getElementById('searchBar').value.toLowerCase();
    const recipePage = recipesMap[query];

    if (recipePage) {
        window.location.href = recipePage;
    } else {
        alert("Recipe not found. Please try again.");
    }
}
