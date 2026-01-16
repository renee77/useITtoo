<?php
session_start();

require_once __DIR__ . '/inc/variables.inc.php';   // waar BASE_PATH/BASE_URL staan
require_once BASE_PATH . '/classes/Product.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/inc/functions.inc.php'; 

// hier komt dan de logica om $_POST in te lezen en de cart bij te werken