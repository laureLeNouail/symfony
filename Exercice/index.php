<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
    require_once('models/database.php');
    $dbh = initDatabse();
    //var_dump(query($dbh));
    ?>

    <table>
      <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actif ?</th>
        <th>Crée le</th>
        <th>Commentaire</th>
      </tr>

      <?php 
      $rows=query($dbh);
      foreach($rows as $cas){
        echo"<tr>
        <td>" .$cas["id"]."</td>
        <td>" .$cas["title"]."</td>
        <td>" .$cas["description"]."</td>
        <td>" .$cas["active"]."</td>
        <td>" .$cas["created_at"]."</td>
        </tr>";

      }
      
      ?>




    </table>
</body>
</html>