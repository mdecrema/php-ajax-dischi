<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
  </head>
    <body>
      <!-- Navigation bar -->
      <header>
        <div class="container">
          <img src="img/logo.png" alt="logo" />
      <!--<div class="generiMusicali">
            <select id="genere" class="">
              <option class="type" value="0">--Scegli Genere--</option>
              <option class="type" value="1">Pop</option>
              <option class="type" value="2">Rock</option>
              <option class="type" value="3">Metal</option>
              <option class="type" value="4">Jazz</option>
            </select>
            <button class="btn-invio" id="invio" type="submit">Cerca</button>
          </div>-->
        </div>
        </header>
        <!-- /Navigation bar -->
        <!-- Contenuto principale pagina -->
      <main>
        <!-- Contenitore lista album -->
        <div class="dischi container">
            <!-- Contenitore disco -->
          <?php include 'database-dischi.php';
            foreach ($dischi as $key) {
          ?>
          <div class="cd">
            <img src="img/<?php echo $key["picture"] ?>" alt="">
            <h3><?php echo $key["title"] ?></h3>
            <span class="author"><?php echo $key["author"] ?></span>
            <span class="year"><?php echo $key["year"] ?></span>
          </div>
          <?php
            }
          ?>
        </div>
      </main>
      <!-- /Contenuto principale pagina -->
    </body>
  </html>
