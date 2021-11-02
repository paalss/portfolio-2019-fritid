<?php
include "sitenames.php";
$sidetittel = "Spill";
include "header.php";
?>

<main>
  <h1><?php echo $sidetittel; ?></h1>
  <p>Spill lagd i Scratch. Du trenger flash for å prøve dem.</p>
  <div class="twocol">
    <li class="box box-1" id="games-formal">
      <a href="games-formal.php">
        FORMAL
      </a>
    </li>
    <li class="box box-2" id="games-citizen">
      <a href="games-citizen.php">
        – Citizen – remix
      </a>
    </li>
  </div>

  <div class="twocol">
    <p>Da jeg var 16 år begynte jeg å programmere i Scratch. Det ble starten på en åtte år lang hobby. Jeg er ikke så veldig aktiv i dag, men Scratch har vært en veldig stor del av livet mitt. Her på denne nettsiden har jeg gjort tilgjengelig noen spill. Resten av mine spill (og andre type prosjekter) er på min konto på scratch.mit.edu.</p>
  </div>
  <div class="contact">
    <h3>Scratch</h3>
    <ul>
      <li>
        <a href="https://scratch.mit.edu/users/pa0110/">
          <span class="icon fa"><img src="images/scratchlogo.png" alt="Scratch logo"></span><span class="text">pa0110</span>
        </a>
      </li>
    </ul>
  </div>
</main>


<?php
include "footer.php";
?>
