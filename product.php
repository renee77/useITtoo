<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '/backend/');

require_once BASE_PATH . '/views/header.php';
require_once BASE_PATH . '/inc/functions.inc.php';
require_once BASE_PATH . '/inc/variables.inc.php';


$source = $_GET['source'] ?? null;
$product = $_GET['product'] ?? null;


?>

<section>
    <div class="container" id="product">

        <!-- validate GET input -->
        <?php
        if ($source !== null && isset($allowedSources[$source])) {
            $productsArray = $allowedSources[$source];

            if ($product !== null && is_array($productsArray) && !empty($productsArray[$product])) {
                $filename = $productsArray[$product];
        ?>
                <!-- create page using GET array -->
                <div id="photo">
                    <a href="<?= BASE_URL ?>/webshop.php">
                        << verder winkelen</a>
                            <img src="<?= BASE_URL ?>images/webshopImages/<?= rawurlencode($filename) ?>"
                                alt="<?= e($product) ?>">
                </div>
                <div id="details">
                    <h1><?= ucfirst(e($product)) ?></h1>

                    <p>Per 1 kg</p>

                    <p>Prijs 1,00 Euro</p>

                    <div id="order">
                        <div class="quantity">
                            <button class="dark-button minus">-</button>
                            <input id="qty" type="number" value="1" min="1" />
                            <button class="dark-button plus">+</button>
                        </div>
                        <button class="orange-button shoppingcar">
                            <img src="<?= BASE_URL ?>/images/winkelwagen-donkergroen.png" id="winkelwagenLogo"
                                alt="winkelwagen logo">
                            <span>In winkelwagen</span>
                        </button>
                    </div>
                </div>
        <?php
            } else { // error handling with wrong or empty get parameters
                echo '<p>Product niet gevonden.</p>';
            }
        } else {
            echo '<p>Ongeldige source.</p>';
        }
        ?>

    </div>
</section>


<?php require_once BASE_PATH . '/views/footer.php'; ?>