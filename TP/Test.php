<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
    <h1>My Pokedex

    </h1>


    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>

        <?php
$link = mysqli_connect("localhost", "root", "root", "film");
        for ($i=1; $i <= 151 ; $i++) {

        $idpoke = 1;
         $req= "SELECT *
         FROM pokemom
         WHERE id = $idpoke; ";
          $result = mysqli_query($link,$req);
         if($result){
            echo"SELECT a retouné ".mysqli_num_rows($result)." lignes.<br>";

          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC));{

          echo "<tr>";
          echo "<td> <td><img src=sprites/". $row['identifier']." alt=". $row['identifier']. "></td>";
          echo "<td>". $row['id'] . "</td>";
          echo "<td>" . $row['identifier'] . "</td>";
          echo "<td>" . $row['height'] . "</td>";
          echo "<td>" . $row['weight'] . "</td>";
          if ($row["base_experience"] >= 200 ) {
            echo "<td class=super>" . $row['base_experience'] . "</td>";
          }
          else {
          echo "<td>" . $row['base_experience'] . "</td>";
        }
          echo "</tr>";
        }
        mysqli_free_result($result;$req);
      }mysqli_close($link);
     } ?>
      </tbody>
    </table>
  </body>
</html>
