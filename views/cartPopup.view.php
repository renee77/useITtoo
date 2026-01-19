<?php


error_log('POPUP SESSION ID: ' . session_id());
error_log(print_r($_SESSION, true));

require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/Product.php';


session_start();
// VEILIG ophalen, voorkomt de warning
$cart = $_SESSION['cart'] ?? null;


?>


<div class="popup-overlay">
    <div id="cart-popup">
        <div class="miniHeader">
            <img src="<?= BASE_URL ?>/images/donker-logo.png" class="logo" alt="logo useITtoo">
            <button class="dark-button close">X</button>
        </div>

        <h3>Winkelwagen</h3>

        <?php if (!$cart instanceof ShoppingCart || empty($cart->getOrderRows())): ?>
            <p>Je winkelwagen is leeg.</p>
        <?php else: ?>
            <?php foreach ($cart->getOrderRows() as $row): ?>
                <div class="orderrow">
                    <img src="<?= BASE_URL ?>/images/webshopImages/<?= htmlspecialchars($row->getProduct()->getImageUrl()) ?>"
                        alt="<?= htmlspecialchars($row->getProduct()->getName()) ?>">
                    <div class="details">
                        <h6><?= htmlspecialchars(ucfirst($row->getProduct()->getName())) ?></h6>
                        <p><?= $row->getQuantity() ?> x €<?= number_format($row->getProduct()->getPrice(), 2, ',', '.') ?>
                            <span>€<?= number_format($row->getQuantity() * $row->getProduct()->getPrice(), 2, ',', '.') ?></span>
                        </p>
                    </div>
                    <button class="dark-button close">x</button>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>