<?php
require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/inc/functions.inc.php';
require_once BASE_PATH . '/classes/Recipes.php';

require_once BASE_PATH . '/views/header.view.php';
?>
<main class="container">
  <h1>Alle recepten</h1>
  <p>Vind hier alle recepten van useITall! Filter binnenkort op groenten, soorten gerechten en nog meer!</p>

  <section class="recipeContainer">
    <!--Voor nu met een array, later via DB binnenhalen -->
    <?php renderRecipes ($recipeBasics, 'recipePhotos'); ?>
  </section>

</main>

<?php 
require_once BASE_PATH . '/views/footer.view.php';
?>