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

// code for showing popup and attach closing closing event to close button
async function openPopup(url, containerID) {
  try {
    const response = await fetch(url, { credentials: "same-origin" });
    if (!response.ok) return;

    const html = await response.text();
    const container = document.getElementById(containerID);
    container.innerHTML = html;
    container.style.display = "block";

    // innerHTML is available also the .close button now a eventlistener can be attached
    const closeBtn = container.querySelector(".close");
    const popup = container.querySelector(".popup");
    const overlay = container.querySelector(".popup-overlay");

    function closePopup() {
      container.innerHTML = "";
      container.style.display = "none";

      const currentUrl = window.location.href.split("?")[0];
      window.history.replaceState({}, "", currentUrl);
    }

    if (closeBtn) {
      closeBtn.addEventListener("click", closePopup);
    }

    // Hier sluit elke klik op de overlay (achtergrond) de popup, terwijl kliks binnen .popup worden tegengehouden.
    if (overlay && popup) {
      overlay.addEventListener("click", closePopup);

      popup.addEventListener("click", (e) => {
        e.stopPropagation(); // klik binnen popup komt niet bij overlay‑handler
      });
    }
  } catch (err) {
    console.error(err);
  }
}

document.querySelector("#winkelwagenLogo").addEventListener("click", () => {
  // pad is lokaal!!!
  openPopup("/backend/views/cartPopup.view.php", "popUp-container");
});

// algemene handler voor GET-params → popup

document.addEventListener("DOMContentLoaded", () => {
  const params = new URLSearchParams(window.location.search);
  const popupType = params.get("popup"); // bv. ?popup=cart
  // als de URL ...?popup=cart is, dan wordt cartPopup.view.php via openPopup ingeladen.

  if (!popupType) return;

  // pad is hier lokaal ingesteld !!!
  const base = "/backend/views/";

  const map = {
    cart: "cartPopup.view.php",
    login: "loginPopup.view.php",
    newsletter: "newsletterPopup.view.php",
    // later: andere popups
  };

  const file = map[popupType];

  if (file) {
    openPopup(base + file, "popUp-container");
  }
});
