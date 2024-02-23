<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webudvikler</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <script src="js/burger.js" defer></script>
  <script src="js/index_slider.js" defer></script>
  <script src="js/slider_header.js" defer></script>
  <script src="js/index.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="icon" href="images/favicon.png" type="image/png">
</head>

<body>

  <?php include("components/header.php"); ?>
  <main>
    <?php include("components/hero.php"); ?>
    <div id="wrapper">
      <?php include("components/background.php"); ?>
      <div class="page-content">

        <h1>Skal du være Webudvikler?</h1>
        <div class="index-introtext flex1">
          <p class="bold">Hvis du drømmer om at blive en del af den digitale verden og skabe flotte og
            funktionelle hjemmesider, er
            webudvikler måske den rigtige uddannelse for dig</p>
        </div>

        <div class="flex-container">
          <div class="index-image flex1"><img src="images/web-developer.avif">
          </div>

          <p class="flex2">Uddannelsen er en kort erhversuddannelse på under 3 år, som ikke kræver en læreplads.<br><br>
            På webudvikleruddannelsen lærer du at bygge hjemmesider og apps.
            For at
            gøre dette vil du blandt andet lære om HTML, CSS og JavaScript, som er de tre grundlæggende teknologier,
            der
            bruges til
            at opbygge websider. <br><br>Her på siden kan du lære mere om hvordan man bliver webudvikler, hvordan
            uddannelsen er opbygget samt om karrieremuligheder efter endt uddannelse. </p>
        </div>

        <div class="flex-container">

          <p class="flex2">Efter endt uddannelse kan du arbejde som front-end udvikler i både private og offentlige
            virksomheder eller som selvstændig.
            Du kan også vælge at specialisere dig inden for et bestemt eller blive selvstændig.<br><br> Der er desuden
            gode muligheder for at bygge videre på dine kompetencer efter uddannelsen.
          </p>

          <?php include("components/slider.php"); ?>

        </div>

        <div class="index-links-container flex1">

          <div class="index-links-item index-link-hover"><a href="course.php"> Læs mere
              om
              erhvervsuddannelsen webudvikler som
              tager 2 år og 9 måneder
              og som udelukkende består af skoleundervisning</a>
          </div>


          <div class="index-links-item index-link-hover"><a href="course.php">
              Læs om dine karrieremuligheder med en uddannelse som webudvikler</a>
          </div>

          <div class="index-links-item index-link-hover"><a href="course.php#videreuddannelse">Få en
              kort
              forklaring på HTML, CSS og
              JavaScript og se hvordan de fungerer</a></div>


          <div class="index-links-item index-links-item_4 index-link-hover"> <a href="course.php">Få mere
              information om uddannelsen, jobmuligheder og find resourcer til begyndere inden for webudvikling </a>
          </div>
        </div>

      </div>
    </div>
  </main>
  <?php include("components/footer.php"); ?>

</body>

</html> 