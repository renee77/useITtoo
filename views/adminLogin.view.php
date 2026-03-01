<?php
require_once dirname(__DIR__) . '/inc/variables.inc.php';
require_once BASE_PATH . '/inc/functions.inc.php' ?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login || useITtoo</title>
  <!--The two needed stylesheets -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/style.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/style/adminLogin.css">
</head>
<body>
  <img src="<?= BASE_URL ?>/images/licht-logo.png"/>
  <form>
    <label for="username"></label>
    <input type="text" placeholder="Gebruikersnaam" name="username" class="logInInput" />
    <label for="password"></label>
    <input type="password" placeholder="Wachtwoord" name="password" class="logInInput" />
    <input type="submit" value="Log in" class="logInBtn"/>
  </form>
</body>
</html>