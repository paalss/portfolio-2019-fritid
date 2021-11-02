<?php
include "sitenames.php";
$sidetittel = $sitenames['index'];
include "header.php";
?>

<header>
  <h1>Pål Stakvik</h1>
  <p class="tagline">Webutviklings&shy;student</p>
</header>

<main class="index">
<div class="fourcol">
  <div class="ommeg">
    <h2>Hei!</h2>
    <?php
    $now = time(); // Hent nåværende UNIX timestamp.
    $then = strtotime('1994-11-28'); // Hent timestamp fra string to time.
    $diff = $now - $then; // Kalkuler forskjell.
    $age = floor($diff / 31556926); // Det er 31556926 sekunder i året
    ?>
    <p>Jeg er en <?php echo $age ?> år gammel student som liker å lage nettsider og diverse kunst.<br>Jeg studerer nå diverse fag etter fullført bachelorgrad i webutvikling.</p>
  </div>

  
    <?php
    $boxi = 1;
    foreach (array_slice($sitenames, 1) as $filename => $name ) {
      echo '<li class="box box-'. $boxi . '  " id="' . $filename . '">';
      echo '<a href="' . $filename . '.php">';
      echo $name;
      echo '</a>';
      echo '</li>';
      $boxi++;
    }
    ?>
  </div>
</main>


<?php
include "footer.php";
?>
