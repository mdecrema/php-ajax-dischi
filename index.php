<?php include 'database-dischi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">
  </head>
    <body>
      <!-- Navigation bar -->
      <header>
        <div class="container">
          <img src="img/logo.png" alt="logo" />
          <div class="generiMusicali">
            <select id="genere" class="">
              <option class="type" value="0">--Scegli Genere--</option>
              <option class="type" value="1">Pop</option>
              <option class="type" value="2">Rock</option>
              <option class="type" value="3">Metal</option>
              <option class="type" value="4">Jazz</option>
              <option class="type" value="5">House/Techno</option>
            </select>
          </div>
        </div>
      </header>
      <!-- /Navigation bar -->

      <!-- Contenuto principale pagina -->
      <main>
        <!-- Contenitore lista album -->
        <div class="dischi container">

        </div>
        <!-- /Contenitore lista album -->
            <!-- template -->
          <script id="entry-template" type="text/x-handlebars-template">

            <div class="cd">
              <img src="img/{{{image}}}" alt="">
              <h3>{{title}}</h3>
              <span class="author">{{author}}</span>
              <span class="year">{{year}}</span>
            </div>

          </script>
          <!-- /template -->
      </main>
      <!-- /Contenuto principale pagina -->

      <!-- Script JS -->
      <script type="text/javascript" src="src/app.js"></script>
    </body>
  </html>
