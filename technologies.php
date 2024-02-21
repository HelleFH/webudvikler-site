<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webudvikler</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/technologies.css" rel="stylesheet">
  <script src="js/burger.js" defer></script>
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

        <h1>Teknologier</h1>

        <p>Her kan du lære lidt om HTML, CSS og JavaScript - de grundlæggende teknologier,
          der driver internettet. Disse
          tre kodningssprog er hovedfokus på kurset som webudvikler. </p>

          <div class="technologies-container">

          <div class="flex-container flex1">
    
            <h2>Webudvikling med HTML, CSS og JS</h2>

            <div><img src="images/html-css-js.jpg" />

              <div> Man kan se HTML som skelettet- kroppens struktur- CSS som
                det ydre, stil og udtryk. JavaScript
                er nervesystemet der giver dynamik til siden.</div>
            </div>
            <div>
              <h3>HTML</h3>
              <p>HTML (Hypertext Markup Language) er det primære sprog til opbygning af
                websider og anvendes til at strukturere indholdet på en side. Eksempler på HTML-tags inkluderer
                til overskrifter, afsnit, billeder og links.</p>
            </div>
          </div>
          <div class="flex-container flex1">

          <div>

            <div>
              <h3>CSS</h3>
              <p>
                CSS (Cascading Style Sheets) er et sprog til design og layout af websider og bruges til at style
                HTML-elementer.<br><br>CSS kan kontrollere farver, skrifttyper, marginer, padding, baggrunde og meget
                mere.
              </p>
            </div>
            <div>
              <h3>JavaScript</h3>
              <p> JavaScript er et programmeringssprog, der anvendes til interaktive funktioner og dynamisk indhold på
                websider. <br><br>Det kan bruges til at validere formularer, oprette animationer, tilføje eller ændre
                HTML-elementer, og meget mere. Eksempler på JavaScript-kode inkluderer event listeners, DOM manipulation
                og AJAX-anmodninger.</p>
            </div>
          </div>
        </div>
  </div>
</div>
  

  </main>


  <?php include("components/footer.php"); ?>
  </div>


</body>

</html>