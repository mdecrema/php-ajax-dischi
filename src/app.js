//const Handlebars = require("handlebars");
//const $ = require("jquery");

$("document").ready(function() {

  $.ajax({
  url: "http://localhost/php-ajax-dischi/api.php",
  method: "GET",
  success: function (data, stato) {
    var cd = data;
    console.log(cd);
    // Richiamo la funzione 'datiBrano' e gli passo l'argomento
    datiAlbum(cd);
  },
  error: function (richiesta, stato, errori) {
    alert("Errore: "+errori);
  }
  })

  function datiAlbum(value) {
    for (i=0; i<=value.length; i++) {
      let brano = value[i];

  // Creo un oggetto con un richiamo alle varie caratteristiche
      var album = {
        "image": brano.picture,
        "title": brano.title,
        "author": brano.author,
        "year": brano.year,
      // "genre": canzone.genre
      }

  // Vado a inserire tutto nel tamplate e lo invio all'html
      var source = $("#entry-template").html();
      var template = Handlebars.compile(source);

      var contenuto = template(album);

      $(".dischi").append(contenuto);
    }
  }

});
