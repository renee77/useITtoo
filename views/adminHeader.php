<?php
require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/inc/functions.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard ||UseITtoo</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/style.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/adminHeader.css">
</head>
<body>
  <header>
    <img src="<?= BASE_URL ?>/images/licht-logo.png"/>
    <ul>
      <li class="navList">
        <a href="#" class="navLinks selected">Home</a>
      </li>
      <li class="navList">
        <a href="#" class="navLinks">Producten</a>
        <ul class="navSubMenu">
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Product toevoegen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Product wijzigen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Product verwijderen
            </a>
          </li>
        </ul>
      </li>
      <li class="navList">
        <a href="#" class="navLinks">Categorieën</a>
        <ul class="navSubMenu">
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Categorie toevoegen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Categorie wijzigen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Categorie verwijderen
            </a>
          </li>
        </ul>
      </li>
      <li class="navList">
        <a href="#" class="navLinks">Tags</a>
      <ul class="navSubMenu">
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Tags toevoegen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Tags wijzigen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Tags verwijderen
            </a>
          </li>
        </ul>
      </li>
      <li class="navList">
        <a href="#" class="navLinks">Acties</a>
        <ul class="navSubMenu">
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Acties toevoegen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Acties wijzigen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Acties verwijderen
            </a>
          </li>
        </ul>
      </li>
      <li class="navList">
        <a href="#" class="navLinks">Recepten</a>
        <ul class="navSubMenu">
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Recept toevoegen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Recept wijzigen
            </a>
          </li>
          <li class="navSubList">
            <a href="#" class="navSubLinks">
              Recept verwijderen
            </a>
          </li>
        </ul>
      </li>
      <li class="navList"><a href="#" class="navLinks">Klanten</a></li>
      <li class="navList"><a href="#" class="navLinks">Reviews</a></li>
      <li class="navList"><a href="#" class="navLinks">Rapportages</a></li>
      <p class="logOut">Log uit</p>
    </ul>
  </header>
  <main>

  </main>
</body>
</html>