<?php include "header.php"?>

  <div class="container">
    <div class="row back">
      <div class="col-xs-12 back-icon">
        <a href="#"> <img src="img/icon-back.svg" alt="icon-back"> </a>
      </div>
    </div>

    <div class="row logo-score">
      <div class="col-xs-offset-3 col-xs-6 logo text-center">
          <img src="img/logo-coolblue.png" alt="logo Coolblue">
      </div>
      <div class="score">
        <div class="col-xs-offset-7 col-xs-1 score-point">
          <div>
            <p>9,1</p>
          </div>
        </div>
        <div class="col-xs-offset-8 col-xs-4 score-toelichting">
          <p>Scoort een 9,1 op het gebied van veiligheid</p>
        </div>
      </div>
    </div>

    <div class="row matchortrash">
      <div class="col-xs-3 match-icon">
        <button onclick="matchClick()" href="#"> <img src="img/icon-match.svg" alt="icon-match"> </button>
      </div>
      <div class="col-xs-6 bedrijfsnaam ">
        <h1>Coolblue</h1>
        <p>Online elektronicawinkel</p>
      </div>
      <div class="col-xs-3 trash-icon">
        <button href="#"> <img src="img/icon-trash.svg" alt="icon-trash"> </button>
      </div>
    </div>

    <div class="row visualisation">
      <div class="col-xs-offset-1 col-xs-10 data">
        <h1>Bekende gegevens</h1>
        <div class="data-inputs">
          <div class="col-xs-5 data-input">
            <a href="#"><img src="img/data-input-1.png" alt="data-input-1"></a>
          </div>
          <div class="col-xs-5 data-input">
            <a href="#"><img src="img/data-input-2.png" alt="data-input-2"></a>
          </div>
          <div class="col-xs-5 data-input">
            <a href="#"><img src="img/data-input-3.png" alt="data-input-3"></a>
          </div>
          <div class="col-xs-5 data-input">
            <a href="#"><img src="img/data-input-4.png" alt="data-input-4"></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row vergeet-me-verzoek">
      <div class="col-xs-offset-1 col-xs-10">
        <button class="button" onclick="location.href='vergeet-me-verzoek.php'" type="button" name="button">Vergeet-me verzoek indienen</button>
      </div>
      <div class="col-xs-12 btn-extra">
        <a href="#">Wat is een vergeet-me verzoek?</a>
      </div>
    </div>

  </div>
    <!-- <div class="legecontainer">

    </div> -->



<?php include "footer.php"?>
<!--  -->
