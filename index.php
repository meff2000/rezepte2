<?php
error_reporting(-1);
ini_set('display_errors','On') ;

$username = "rezepte";
$password = "Merlin123*";
$dsn = "mysql:host=localhost;dbname=rezepte;charset=utf8";
$db = new PDO($dsn,$username,$password);

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Meine Rezepte</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <header class="jumbotron">
      <div class="container">
        <h1>Coole Rezepte zum kochen</h1>
      </div>
    </header>

    <section class="container" id="rezepte">
      <div class="row">
        <div class="col">
          <?php include 'card.php' ?>
        </div>
        <div class="col">
          <?php include 'card.php' ?>
        </div>
        <div class="col">
          <?php include 'card.php' ?>
        </div>
        <div class="col">
          <?php include 'card.php' ?>
        </div>
    </section>

    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
