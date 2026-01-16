<?php

session_start();
require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/Product.php';

$cart = $_SESSION['cart'] ?? null;
?>

<link rel="stylesheet" href="<?= BASE_URL ?>/style/webshop.css">
<link rel="stylesheet" href="<?= BASE_URL ?>/style/style.css">

<div class="popup-overlay">
    <div id="cart-popup">
        <div class="miniHeader">
            <img src="<?= BASE_URL ?>/images/donker-logo.png" class="logo" alt="logo useITtoo">
            <button class="dark-button close">x</button>
        </div>
        <h3>Winkelwagen</h3>

        <?php if (!$cart instanceof ShoppingCart): ?>

            <p>Je winkelwagen is leeg.</p>
        <?php else: ?>

        <?php endif; ?>
    </div>
</div>