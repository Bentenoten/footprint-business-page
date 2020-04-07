<?php include "header.php"?>

  <div class="container">
    <div id="snackbar">
      <p>Het bedrijf Coolblue is toegevoegd aan je matches.</p>
    </div>

    <div class="row back">
      <div class="col-xs-12 back-icon">
        <a href="javascript:history.back()"> <img src="img/icon-back.svg" alt="icon-back"> </a>
      </div>
    </div>

    <div class="row logo-score">
      <div class="col-xs-offset-3 col-xs-6 logo-company text-center">
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
      <!-- <div class="col-xs-3 match">
        <button class="match-icon" onclick="matchClick();" href="#"> <img src="img/icon-match.svg" alt="icon-match"> </button>
      </div> -->
      <div class="col-xs-offset-3 col-xs-6 bedrijfsnaam ">
        <h1>Coolblue</h1>
        <p>Online elektronicawinkel</p>
      </div>
      <!-- <div class="col-xs-3 trash">
        <button class="trash-icon" onclick="trashClick();"> <img src="img/icon-trash.svg" alt="icon-trash"> </button>
      </div> -->
    </div>

    <div class="row visualisation">
      <div class="col-xs-offset-1 col-xs-10 data">
        <h1>Bekende gegevens</h1>
        <div class="data-inputs">
          <div class="col-xs-5 data-input" onclick="dataVisualisation1();" >
            <p>Aantal e-mails</p>
            <a href="#"><img src="img/visualisation-1.png" alt="data-input-1"></a>
          </div>
          <div class="col-xs-5">
            <div id="data-visualisation-1" >
              <p>Vanuit het bedrijf Coolblue worden maandelijks <br> <b>7 e-mails </b> <br> naar je e-mailadres verzonden.</p>
            </div>
          </div>
          <div class="col-xs-5">
            <div id="data-visualisation-2" >
              <p>Het bedrijf Coolblue krijgt een klantenbeoordeling van een <br> <b> 9,1</b>. <br> </p>
            </div>
          </div>
          <div class="col-xs-5 data-input" onclick="dataVisualisation2();">
            <p>Klantreviews</p>
            <a href="#"><img src="img/visualisation-2.png" alt="data-input-2"></a>
          </div>
          <div class="col-xs-5 data-input" onclick="dataVisualisation3();" >
            <p>Dataportabiliteit</p>
            <a href="#"><img src="img/data-input-3.png" alt="data-input-3"></a>
          </div>
          <div class="col-xs-5">
            <div id="data-visualisation-3" >
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
          <div class="col-xs-5">
            <div id="data-visualisation-4" >
              <p>Het bedrijf Coolblue heeft de volgende persoonsgegevens van jou: <br> <b>Naam, Geslacht, Adres, Verjaardag, Telefoon & E-mail</b>.</p>
            </div>
          </div>
          <div class="col-xs-5 data-input" onclick="dataVisualisation4();">
            <p>Persoonsinfo</p>
            <a href="#"><img src="img/visualisation-4.png" alt="data-input-4" ></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row vergeet-me-verzoek">
      <div class="col-xs-offset-1 col-xs-10">
        <button class="button" onclick="location.href='gast-vergeet-me-verzoek.php'" type="button" name="button">Vergeet-me verzoek indienen</button>
      </div>
      <div class="col-xs-12 btn-extra">
        <a href="info-vergeet-me-verzoek.php">Wat is een vergeet-me verzoek?</a>
      </div>
    </div>

  </div>
    <!-- <div class="legecontainer">

    </div> -->



<?php include "footer.php"?>
<!--  -->
