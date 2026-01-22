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

// code for showing popup
async function openPopup(url, containerID) {
  try {
    const response = await fetch(url, {
      credentials: "same-origin",
    });
    if (!response.ok) {
      return;
    }

    const html = await response.text();
    const container = document.getElementById(containerID);
    container.innerHTML = html;
    container.style.display = "block";
  } catch (err) {
    console.error(err);
  }
}
