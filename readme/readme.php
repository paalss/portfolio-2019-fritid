<!DOCTYPE html>
<html lang="no"><head><title>Readme</title></head><body>

  <!-- 1. LEGGE TIL NY SIDE: -->
  <!-- 1.1 Nødvendig sidekode: ––––––––––––––––––––––––––––––––––––––––––––––-->
  <?php
  $sidetittel = "Interesser";
  include "header.php";
  ?>
  <main>
    <h1><?php echo $sidetittel; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, in.</p>
  </main>


  <?php
  include "footer.php";
  ?>
  <!--  –––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––-->
  <!-- 1.2 Nødvendig kode i sitenames.php: -->
  <!-- Legg til filnavn og displaynavn i array: -->
  <!-- 'filnavn' => 'displaynavn' -->
  <?php
  $sitenames = array('index' => 'Hjem',
                      'freetime' => 'Kunst',
                      'games' => 'Spill')


  ?>
</body></html>
