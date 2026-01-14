<?php
// always  create a main path above each file 
define('BASE_PATH', __DIR__); // = path to  ~/htdocs/backend
define('BASE_URL', '/backend'); // URL-path as you use it in your webbrowser, this is the project directory probably in htdocs (xamp)

require_once BASE_PATH . '/views/header.php';
require_once BASE_PATH . '/inc/functions.inc.php';
require_once BASE_PATH . '/inc/variables.inc.php';
?>

<section id="categoriesBackGround">
    <div class="container" id="categories">
        <a href="#">Groenten</a>
        <a href="#">Fruit </a>
        <a href="#">Abonnementen</a>
    </div>

</section>

<section id="salesBackGround">
    <div class="container" id="sales">
        <div>aanbieding 1</div>
        <div>aanbieding 2</div>
    </div>

</section>

<section id="shopBackGround">
    <div class="container" id="shop">
        <h1>Onze Producten</h1>
        <!-- vegtables  :nl even voor ons categorien worden later geautomatiseerd en via invoer beheerdersportaal ingevoerd. de categorie is dan gekoppeld aan een array met producten en fotos-->
        <?php renderProductSection('Groenten', $vegtablePhotos, 'vegtablePhotos'); ?>
        <!-- fruits -->
        <?php renderProductSection('Fruit', $fruitPhotos, 'fruitPhotos'); ?>
    </div>

    </div>

</section>


<?php require_once BASE_PATH . '/views/footer.php'; ?>