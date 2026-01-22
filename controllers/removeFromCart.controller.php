<?php

require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/Product.php';

session_start();


// validate index as int and above 0
$index = filter_input(
    INPUT_POST,
    'rowIndex',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 0]]
);

// error handling --> toekomst eventueel nog uitwerken!
if ($index === false || !isset($_SESSION['cart']) || !($_SESSION['cart'] instanceof ShoppingCart)) {
    header('Location: ' . BASE_URL . '/webshop.page.php?cart=invalid');
    exit;
}

$cart = $_SESSION['cart'];
$cart->removeOrderRowByIndex($index);
$_SESSION['cart'] = $cart;

// zelfde querystring als bij addToCart, zodat popup toont
header('Location: ' . BASE_URL . '/webshop.page.php?cart=updated');
exit;
