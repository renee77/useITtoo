// -1+ product.php for working count buttons
const input = document.getElementById("qty");
const buttonPlus = document.querySelector(".dark-button.plus");
const buttonMinus = document.querySelector(".dark-button.minus");
if (buttonPlus) {
  buttonPlus.addEventListener("click", () => {
    input.value = Number(input.value) + 1;
  });
  buttonMinus.addEventListener("click", () => {
    const min = Number(input.min) || 0;
    if (Number(input.value) > min) {
      input.value = Number(input.value) - 1;
    }
  });
}

// code for showing cart popup
async function openCartPopup() {
  try {
    const response = await fetch("/backend/views/cartPopup.view.php", {
      credentials: "same-origin",
    });
    if (!response.ok) {
      return;
    }

    const html = await response.text();
    const container = document.getElementById("cartPopUp-container");
    container.innerHTML = html;
    container.style.display = "block";

    // sluiten via overlay of X-knoppen - NU pas event listeners toevoegen
    const overlay = container.querySelector(".popup-overlay");
    const closeButtons = container.querySelectorAll(".dark-button.close");

    if (overlay) {
      overlay.addEventListener("click", closePopup);
    }

    closeButtons.forEach((btn) => {
      btn.addEventListener("click", closePopup);
    });

    function closePopup() {
      container.innerHTML = "";
      container.style.display = "none";
    }

    // Add to openCartPopup() for debugging
    console.log("Fetched HTML length:", html.length);
    console.log("Cart container:", container);
  } catch (err) {
    console.error(err);
  }
}
