<?php
session_start();
// Belangrijk:
//   Zodra je session_start(); hebt aangeroepen, wordt de sessie‑data aan het eind van het script opgeslagen (bij script‑einde of bij session_write_close()); daarna mag exit; komen zonder probleem.​
//   De sessie wordt pas echt beëindigd als je session_destroy() (en evt. cookie wissen) aanroept, niet door exit; of header('Location: ...')
// session_start() moet in elk PHP‑script worden aangeroepen waar je $_SESSION wilt gebruiken, niet één keer “voor het hele project”

// PHP draait elk bestand (addToCart.controller.php, cart.page.php, product.page.php, …) als een apart request.
// Bij elk request weet PHP niks van vorige scripts, totdat je session_start() aanroept; dan koppelt hij het huidige verzoek aan de juiste sessie (via de cookie) en vult $_SESSION.​
// In addToCart.controller.php heb je session_start() nodig om de cart te wijzigen.
// In cart.page.php heb je opnieuw session_start() nodig om dezelfde sessie te lezen (anders is $_SESSION['cart'] leeg/niet beschikbaar).
// session_start() is alleen nodig in bestanden waar je sessiegegevens leest of schrijft ($_SESSION['cart'], user‑login, etc.)

// AddToCart.controller.php → wél session_start() (cart aanpassen).
// cart.page.php → wél session_start() (cart tonen).
// product.page.php → geen sessie nodig zolang je alleen productgegevens toont en via een form POST naar de controller stuurt.


require_once dirname(__DIR__) . '/inc/variables.inc.php';   // waar BASE_PATH/BASE_URL staan dirname(__DIR__) gaat een map omhoog
require_once BASE_PATH . '/classes/Product.php';
require_once BASE_PATH . '/classes/OrderRow.php';
require_once BASE_PATH . '/classes/ShoppingCart.php';
require_once BASE_PATH . '/inc/functions.inc.php';

// hier komt dan de logica om $_POST in te lezen en de cart bij te werken

// Input ophalen en valideren
$name     = $_POST['name']     ?? '';
$imageUrl = $_POST[e('imageUrl')] ?? null;
$priceRaw = $_POST['price']    ?? ''; // string van de browser
$quantityRaw   = $_POST['quantity'] ?? '1'; // string van de browser


// $_POST['price'] en dus $priceRaw zijn in eerste instantie altijd een string; 
// PHP zet form‑data niet automatisch om naar getallen
// In het formulier stuur je bijvoorbeeld value="1.50" → dat komt in PHP binnen als "1.50" (string)

// price to float
$price    = filter_var($priceRaw, FILTER_VALIDATE_FLOAT);

if ($price === false) {
    // geen geldig getal binnengekomen // Foutafhandeling: ongeldige prijs
    die('Ongeldige prijs.'); // zelfde als exit(), Veel developers gebruiken die bij fouten en En gebruiken exit voor “normale” beëindiging, b.v. na een redirect of na succesvol afronden van een script
}

// later wordt hier ook getoetst of het niet meer dan voorraad is of het max aantal stuks dat we willen verkopen
$quantity = filter_var($quantityRaw, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]); //quantity wordt gecontroleerd met FILTER_VALIDATE_INT en een min_range, zodat het een positieve int is

if ($quantity === false) {
    $quantity = 1;
}

// Bestaande cart uit sessie of nieuwe maken
if (isset($_SESSION['cart']) && $_SESSION['cart'] instanceof ShoppingCart) {
    $cart = $_SESSION['cart'];
} else {
    $cart = new ShoppingCart();
}

// Product‑object maken (nu nog zonder database)
$product = new Product($name, $imageUrl, $price);

// OrderRow maken en aan cart toevoegen
$orderRow = new OrderRow($product, $quantity);
$cart->addOrderRow($orderRow);

// Terug naar winkelwagen of productpagina
header('Location: ' . BASE_URL . '/views/cartPopup.view.php');
exit;

// exit sluit alleen het lopende PHP‑script af, niet de sessie zelf. De sessiegegevens blijven gewoon bewaard zolang je ze niet expliciet vernietigt.