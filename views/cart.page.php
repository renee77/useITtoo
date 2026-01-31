<?php
session_start();
require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/Product.php';

$cart = $_SESSION['cart'] ?? null;

require_once BASE_PATH . '/views/header.view.php';
?>

<main class="container">
  <h1>Winkelwagen</h1>
  <section id="gridBox">
    <section id="orderRow">
      <!-- Placeholder information so that we get to see what it looks like -->
      <section class="imageBox">
        <img src="../images/webshopImages/boerenkool.jpg" />
      </section>
      <section class="orderRowInformationBox">
        <p class="orderRowTitle">Boerenkool</p>
        <p class="orderRowInfo">€ 1,50 per 1kg</p>
        <!--Currently a predefined value, can be loaded in later -->
        <div class="quantity">
            <!-- minus and plus get type button, because they are not allowed to submit the form -->
            <button class="dark-button minus" type="button" aria-label="Verminder aantal">-</button>
            <input id="qty" name="quantity" type="number" value="2" min="1">
            <button class="dark-button plus" type="button" aria-label="Verhoog aantal">+</button>
        </div>
      </section>
      <section class="orderRowTotalBox">
        <p class="orderRowTotal">€ 3,00</p>
        <button class="deleteBtn">D</button>
      </section>
    </section>


    <section id="totalBox">
      <h2>Overzicht</h2>
      <div class="total">
        <div class="totalLeftSide">
          <p>Totaal</p>
          <p>Verzendkosten</p>
        </div>
        <div class="totalRightSide">
          <p>€ 3,00</p>
          <p>€ 5,95</p>
        </div>
      </div>
    </section>
  </section>
</main>

<?php 
require_once BASE_PATH . '/views/footer.view.php';
?>