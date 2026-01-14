<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '/backend/');

require_once BASE_PATH . '/views/header.php';
require_once BASE_PATH . '/inc/functions.inc.php';
require_once BASE_PATH . '/inc/variables.inc.php';


$source = $_GET['source'] ?? null;
$product = $_GET['product'] ?? null;


?>

<div class="container">

    <!-- validate GET input -->
    <?php
    if ($source !== null && isset($allowedSources[$source])) {
        $productsArray = $allowedSources[$source];

        if ($product !== null && is_array($productsArray) && !empty($productsArray[$product])) {
            $filename = $productsArray[$product];
    ?>
            <!-- create page using GET array -->
            <h1><?= ucfirst(e($product)) ?></h1>
            <img src="<?= BASE_URL ?>images/webshopImages/<?= rawurlencode($filename) ?>"
                alt="<?= e($product) ?>">
    <?php
        } else { // error handling with wrong or empty get parameters
            echo '<p>Product niet gevonden.</p>';
        }
    } else {
        echo '<p>Ongeldige source.</p>';
    }
    ?>

</div>


<?php require_once BASE_PATH . '/views/footer.php'; ?>