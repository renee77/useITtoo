<?php
function e($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// for displaying products in webshop
function renderProductSection(string $categorie, array $products, string $arrayName)
{
    echo '<h2>' . e($categorie) . '</h2>';
    echo '<div class="shop ' . e($categorie) . '">';

    // loop trough array with productnames and filenames for rendering to website
    foreach ($products as $productName => $filename) {
        echo '<div class="product ' . $productName . '">';

        // url for link with get parameters to product page
        $url = BASE_URL . '/views/product.page.php?' . http_build_query([
            'product' => $productName,
            'source' => $arrayName
        ]);
        echo '<a href="' . e($url) . '">';

        // webshop image and title
        echo '<img src="' . BASE_URL . '/images/webshopImages/' . rawurlencode($filename) . '" alt="' . e($productName) . '">';
        echo '<h5>' . e($productName) . '</h5>';
        echo '<p class="price"> 1,00 Euro/Kg </p>';
        echo '</a>';

        echo '</div>';
    }
    echo '</div>'; // close .shop
}




function renderRecipes (array $recipes, string $arrayName) {
      foreach ($recipes as $recipeName => $recipeInfo) {
        $image = $recipeInfo[0];
        $imageSrc = BASE_URL . '/images/recipeImages/' . rawurlencode($image);
        $url = BASE_URL . '/views/recipe.page.php?' . http_build_query([
          'recipe' => $recipeName,
          'source' => $arrayName,
        ]);
        

        echo '<div class="recipeBlock">';
        echo '<a href="' . e($url) . '">';
          echo '<img src="' . $imageSrc . '">';
          echo '<h4>' . e($recipeName) . '</h4>';
        echo '</a>';
        echo '</div>';
      }
    }