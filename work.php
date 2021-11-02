<?php
include "sitenames.php";
$sidetittel = $sitenames['work'];
include "header.php";
?>

<main>
  <h1><?php echo $sidetittel; ?></h1>
  <h2>Webutvikling, universitet</h2>
  <ul>
    <li>
      <a href="http://folk.ntnu.no/paalsst/webprog_php/php-prosjektet/">Reiseregninger</a>, en side med bruk av PHP og databaser
    </li>
    <li>
      <a href="http://folk.ntnu.no/paalsst/sprakrensk/oblig1_pss.html">Språkrensk</a>, en side med bruk av JavaScript
    </li>
  </ul>
  <p>
    Flere nettsider på <a href="folk.ntnu.no/paalsst">folk.ntnu.no/paalsst</a>.
  </p>
  <h2>Medier og kommunikasjon, videregående</h2>
  <div class="art">
    <?php
    $artgall = array(
      'web-mpoe-plakat' => 'jpg',
      'web-mpoe-omslag' => 'jpg',
      'web-atteglass' => 'jpg',
      'web-banner1' => 'jpg',
      'web-banner2' => 'jpg',
      'web-banner3' => 'jpg',
      'web-brettspill1' =>'jpg',
      'web-brettspill2' =>'jpg',
      'web-cityfrisor-logo' => 'png',
      'web-frekvens-drikkeflask' => 'jpg',
      'web-frekvens-logo' => 'png'
    );
    foreach ($artgall as $name => $ext) {
      echo '<a href="images/work/' . $name . '.' . $ext . ' " data-lightbox="mygallery" data-title=" ' . $name . ' ">';
      echo '<img src="images/work/' . $name . '.' . $ext . ' " alt=" ' . $name . ' ">';
      echo '</a>';
    }
    ?>
    <!-- PHP-kode produserer a la dette: -->
    <!-- <a href="images/work/web-atteglass.jpg" data-lightbox="mygallery" data-title="web-atteglass">
    <img src="images/work/web-atteglass.jpg" alt="">
  </a> -->
  <!-- Gammel kode for taggbox. Men trial er utløpt og Instagram krever business account hvis du vil embede gallery på nettside nå. -->
  <!-- <div class="taggbox-container" style=" width:100%; height:100%; overflow: auto;">
  <script defer src="//web.taggbox.com/app/js/embed.min.js" type="text/javascript"></script>
  <div class="taggbox-socialwall" data-wall-id="26630" view-url="https://taggbox.com/w/26630"></div>
</div> -->
</div>
</main>

<!-- <div class="contact">
<h2>some</h2>
<ul>
<li>
<a href="https://scratch.mit.edu/users/pa0110/">
<span class="icon fa"><img src="images/scratchlogo.png" alt="Scratch logo"></span><span class="text">pa0110</span>
</a>
</li>
</ul>
</div> -->


<?php
include "footer.php";
?>
