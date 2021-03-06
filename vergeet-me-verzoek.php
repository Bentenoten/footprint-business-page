<?php include "header.php" ?>

<div class="container vergeet-me-verzoek-page">

  <div class="row back">
    <div class="col-xs-12 back-icon">
      <a href="javascript:history.back()"> <img src="img/icon-back.svg" alt="icon-back"> </a>
    </div>
  </div>

  <div class="row title white">
    <div class="col-xs-offset-0 col-xs-12">
      <h1>Vergeet me verzoek indienen</h1>
      <br>
      <p>Door op ‘Ja, vergeet-me verzoek indienen’ wordt direct uw verzoek verzonden naar het bedrijf Coolblue en toegevoegd aan de lijst met trashes. </p>
    </div>
  </div>

  <div class="row illustration">
    <div class="col-xs-offset-1 col-xs-10">
      <img src="img/illustration-delete.svg" class="without-account-img">
    </div>
  </div>

  <div class="row options">
    <div class="col-xs-offset-1 col-xs-10">
      <button class="button" onclick="location.href='vergeet-me-verzoek-ingediend.php'">Ja, ik wil een vergeet-me verzoek indienen</button>
    </div>
    <div class="col-xs-12 btn-extra white">
      <a href="javascript:history.back()">Nee, geen vergeet-me verzoek indienen</a>
    </div>
  </div>

</div>

<?php include "footer.php" ?>
