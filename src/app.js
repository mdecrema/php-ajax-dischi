//const Handlebars = require("handlebars");
//const $ = require("jquery");

$("document").ready(function() {

  $.ajax({
  url: "http://localhost/php-ajax-dischi/api.php",
  method: "GET",
  success: function (data, stato) {
    var cd = data;
    console.log(cd);
    // Richiamo la funzione 'datiAlbum' e gli passo l'argomento
    datiAlbum(cd, "5");
  },
  error: function (richiesta, stato, errori) {
    alert("Errore: "+errori);
  }
  })

  function datiAlbum(value, genre) {

    for (i=0; i<=value.length; i++) {
      let brano = value[i];

      if (brano.genre == genre) {


  // Creo un oggetto con un richiamo alle varie caratteristiche
      var album = {
        "image": brano.picture,
        "title": brano.title,
        "author": brano.author,
        "year": brano.year,
        //"genre": brano.genre
      }

  // Vado a inserire tutto nel tamplate e lo invio all'html
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);

      var contenuto = template(album);

      $(".dischi").append(contenuto);
    }
  }
}


  // Scelta Genere Musicale
  $("#genere").change(function() {
    $(".dischi.container").text("");
    var selectedGenre = $(this).children("option:selected").val();
    console.log(selectedGenre);

  $.ajax({
  url: "http://localhost/php-ajax-dischi/api.php",
  method: "GET",
  success: function (data, stato) {
    var cd = data;
    console.log(cd);
    // Richiamo la funzione 'datiAlbum' e gli passo l'argomento
    filtroGenere(cd, selectedGenre);
  },
  error: function (richiesta, stato, errori) {
    alert("Errore: "+errori);
  }
  })

  function filtroGenere(value, type) {

    for (i=0; i<=value.length; i++) {
      let brano = value[i];

      if (brano.genre == type) {

  // Creo un oggetto con un richiamo alle varie caratteristiche
      var album = {
        "image": brano.picture,
        "title": brano.title,
        "author": brano.author,
        "year": brano.year,
        //"genre": brano.genre
      }

  // Vado a inserire tutto nel tamplate e lo invio all'html
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);

      var contenuto = template(album);

      $(".dischi").append(contenuto);
    }
  }
  }


})



});
