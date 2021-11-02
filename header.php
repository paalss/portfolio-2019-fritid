<?php
// Hver side skal ha koden:
// include "sitenames.php";
// $sitenames['index'];
// include "header.php";
?>

<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/lightbox-plus-jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600&display=swap" rel="stylesheet">
  <!-- w3schools some buttons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title><?php echo $sidetittel ?> | Påls Portefølje</title>
</head>
<body>
  <div class="wrapper">
    <nav>
      <label for="hamburger">&#9776;</label>
      <input type="checkbox" id="hamburger">
      <ul>
        <?php
        // Skriv ut menyelementene og skill ut den brukeren er på:
        // Altså der hvor navn = sidetittel, legg til class="current"
        foreach ($sitenames as $filename => $name ) {
          if ($name == $sidetittel) {
            echo '<li><a href="' . $filename . '.php" class="current">' . $name . '</a></li>';
          }
          else {
            echo '<li><a href="' . $filename . '.php"  > ' . $name . '</a></li>';
          }
        }


         ?>
        <!-- <li><a href="freetime.php" <?php //if($sidetittel == 'Kunst') { echo 'class="current"'; } ?>>Kunst</a></li>
        <li><a href="games.php" <?php //if($sidetittel == 'Spill') { echo 'class="current"'; } ?>>Spill</a></li>
        <li><a href="about.php" <?php //if($sidetittel == 'Om meg') { echo 'class="current"'; } ?>>Om meg</a></li>
        <li><a href="contact.php" <?php //if($sidetittel == 'Kontakt') { echo 'class="current"'; } ?>>Kontakt</a></li> -->
        <!-- <li><a href="interests.php">Interesser</a></li>
        <li><a href="work.php">Arbeid</a></li>
        <li><a href="#">Tegninger</a></li>
        <li><a href="#">Utendørs</a></li>
        <li><a href="#">Foto</a></li> -->
      </ul>
    </nav>
