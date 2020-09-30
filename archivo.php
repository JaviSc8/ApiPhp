<?php
//Si recibimos la petición AJAX se ejecuta el código:
  if (isset($_POST)) {
    //Obtenemos datos de usuarios y posts:
    $data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'), true );
    $dataPosts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts/'), true );
    //print_r($data);
    //Comenzamos a imprimir la tabla:
      echo "<div><br><table border=1><tr><th>Id Usuario</th><th>Nombre</th><th>Email</th><th>Nº de posts</th></tr>";
      $longitud = count($data);
      $longitudPosts = count($dataPosts);
      $cuenta = 0;
      //Recorremos los JSON mediante bucles for:
      for ($i=0; $i <$longitud ; $i++) {
        echo "<tr><td>".$data[$i]["id"]."</td><td>".$data[$i]["name"]."</td><td>".$data[$i]["email"]."</td>";
        for ($x=0; $x <$longitudPosts ; $x++) {
          if ($dataPosts[$x]["userId"] === $data[$i]["id"]) {
            $cuenta +=1;
          }
        }
      echo "<td id="."color".">".$cuenta."</td>";
      echo "</tr>";
      $cuenta = 0;
      }
    }
  ?>
