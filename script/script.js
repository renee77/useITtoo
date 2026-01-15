// -1+ product.php for working count buttons
const input = document.getElementById('qty');
  document.querySelector('.dark-button.plus').addEventListener('click', () => {
    input.value = Number(input.value) + 1;
  });
  document.querySelector('.dark-button.minus').addEventListener('click', () => {
    const min = Number(input.min) || 0;
    if (Number(input.value) > min) {
      input.value = Number(input.value) - 1;
    }
  });