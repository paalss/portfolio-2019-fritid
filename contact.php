<?php
include "sitenames.php";
$sidetittel = $sitenames['contact'];
include "header.php";
?>

<main>
  <h1><?php echo $sidetittel; ?></h1>
  <div class="contact">
    <script>
    function copyGmail() {
      /* Get the text field */
      var copyText = document.getElementById("gmail");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      // alert("Kopiert: " + copyText.value);
      document.getElementById('copygmail_feedback').innerHTML = copyText.value + " kopiert";
    }
    function copyStudmail() {
      /* Get the text field */
      var copyText = document.getElementById("studmail");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      // alert("Kopiert: " + copyText.value);
      document.getElementById('copystudmail_feedback').innerHTML = copyText.value + " kopiert";
    }
    </script>
    <ul>
      <li>
        <a href="mailto:paalss94@gmail.com">
          <span class="icon fa fa-envelope"></span><span class="text">paalss94@gmail.com</span>
        </a>
        <input type="text" id="gmail" class="mailtext" value="paalss94@gmail.com">
        <button onclick="copyGmail()">Kopier</button>
        <span id="copygmail_feedback"></span>
      </li>
      <li>
        <a href="mailto:paalsst@stud.ntnu.com">
          <span class="icon fa fa-envelope"></span><span class="text studmail">paalsst@stud.ntnu.com</span>
        </a>
        <input type="text" id="studmail" class="mailtext" value="paalsst@stud.ntnu.no">
        <button onclick="copyStudmail()">Kopier</button>
        <span id="copystudmail_feedback"></span>
      </li>
      <li>
        <a href="https://www.facebook.com/pal.stakvik">
          <span class="icon fa fa-facebook"></span><span class="text">Facebook</span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/in/pal-stakvik/">
          <span class="icon fa fa-linkedin"></span><span class="text">Linkedin</span>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/gassosaman/">
          <span class="icon fa fa-instagram"></span><span class="text">Instagram</span>
        </a>
      </li>
      <li>
        <a href="https://scratch.mit.edu/users/pa0110/">
          <span class="icon fa"><img src="images/scratchlogo.png" alt="Scratch logo"></span><span class="text">Scratch</span>
        </a>
      </li>

    </ul>
  </div>

</main>


<?php
include "footer.php";
?>
