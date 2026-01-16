<?php
require_once __DIR__ . '/inc/variables.inc.php';   // waar BASE_PATH/BASE_URL staan
require_once BASE_PATH . '/views/header.php';
require_once BASE_PATH . '/inc/functions.inc.php';
require_once BASE_PATH . '/inc/variables.inc.php';
require_once BASE_PATH . '/classes/Product.php';


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
                $productname = e($product);

                $product = new Product($productname, $filename);
        ?>
                <!-- create page using GET array -->
                <div id="photo">
                    <a href="<?= BASE_URL ?>/webshop.page.php">
                        << verder winkelen</a>
                            <img src="<?= BASE_URL ?>/images/webshopImages/<?= rawurlencode($product->getImageUrl()) ?>"
                                alt="<?= $product->getName() ?>">
                </div>
                <div id="details">
                    <h1><?= ucfirst($product->getName()) ?></h1>

                    <p>Per: <span class="amount"><?= $product->getWeight() ?></span></p>

                    <!-- hier wil ik de prijs nog uit het objecttoevoegen -->
                    <!-- 2 decimalen , is decimaalteken . duizendtalscheiding -->
                    <p>Prijs: <span><?= number_format($product->getPrice(), 2, ',', '.') ?></span> Euro</p>


                    <!-- Na klikken gaat de browser naar add_to_cart.php met POST‑data: name, price, quantity -->
                    <form id="order" action="add_to_cart.php" method="post">
                        <!-- productgegevens meegeven  dit is nu een tijdelijke oplossing omdat we nog geen db hebben
                         normaal geef je het product_id mee  In add_to_cart.php haal je het product uit de database:
                         (SELECT * FROM products WHERE id = ?) en maakt daarvan een Product‑object.
                         Dat object stop je in een OrderRow-->
                        <input type="hidden" name="name" value="<?= htmlspecialchars($product->getName()) ?>">
                        <input type="hidden" name="price" value="<?= htmlspecialchars($product->getPrice()) ?>">

                        <div class="quantity">
                            <!-- minus and plus get type button, because they are not allowed to submit the form -->
                            <button class="dark-button minus" type="button">-</button>
                            <input id="qty" name="quantity" type="number" value="1" min="1">
                            <button class="dark-button plus" type="button">+</button>
                        </div>

                        <button type="submit" class="orange-button shoppingcart">
                            <img src="<?= BASE_URL ?>/images/winkelwagen-donkergroen.png" id="winkelwagenLogo"
                                alt="winkelwagen logo">
                            <span>In winkelwagen</span>
                        </button>
                    </form>

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