<?php

require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/Product.php';


session_start();
// VEILIG ophalen, voorkomt de warning
$cart = $_SESSION['cart'] ?? null;


?>



<div class="popup-overlay">
    <div id="cart-popup" class="popup">
        <div class="miniHeader">
            <img src="<?= BASE_URL ?>/images/donker-logo.png" class="logo" alt="logo useITtoo">
            <button class="dark-button close">X</button>
        </div>

        <h3>Winkelwagen</h3>

        <?php if (!$cart instanceof ShoppingCart || empty($cart->getOrderRows())): ?>
            <p>Je winkelwagen is leeg.</p>
        <?php else: ?>
            <!-- later wordt voor $index de index uit de db gebruikt -->
            <?php foreach ($cart->getOrderRows() as $index => $row): ?>
                <div class="orderrow">
                    <img src="<?= BASE_URL ?>/images/webshopImages/<?= htmlspecialchars($row->getProduct()->getImageUrl()) ?>"
                        alt="<?= htmlspecialchars($row->getProduct()->getName()) ?>">
                    <div class="details">
                        <h4><?= htmlspecialchars(ucfirst($row->getProduct()->getName())) ?></h4>
                        <p><?= $row->getQuantity() ?> x €<?= number_format($row->getProduct()->getPrice(), 2, ',', '.') ?></p>
                    </div>
                    <p>€<?= number_format($row->getQuantity() * $row->getProduct()->getPrice(), 2, ',', '.') ?></p>

                    <!-- form om te zorgen dat de delete button een orderrow uit de winkelwagen kan verwijderen dmv van een post operatie -->

                    <form method="post" action="<?= BASE_URL ?>/controllers/removeFromCart.controller.php">
                        <input type="hidden" name="rowIndex" value="<?= $index ?>">
                        <button type="submit" class="dark-button delete">x</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>