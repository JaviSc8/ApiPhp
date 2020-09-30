<html>
  <head>
    <meta charset="utf-8">
    <title>ApiPhp</title>
  </head>
  <body>
    <h1>Api con Php</h1>
    <button type="button" id="pulsado">Pulsa aquí para obtener datos</button>
    <!--Div donde llega la respuesta de la petición Ajax-->
    <div id="respuesta">
    </div>
    <!--JQuery y petición ajax-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $("#pulsado").click(function() {
      var option = confirm("Va a consultar datos, ¿esta de acuerdo?");
      if (option == true){
      $.ajax(
      {
      async: true,
      url : 'archivo.php',
      type: "POST",
      })
      .done(function(data) {
          $("#respuesta").html(data);
    })
      .fail(function(data) {
        alert( "Error, intentelo en unos minutos");
      })
    }
    });
    </script>
  </body>
</html>
