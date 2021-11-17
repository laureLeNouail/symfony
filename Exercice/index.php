<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Post</title>
    <style>
      table, th, td {
      padding: 10px;
      border: 1px solid black;
      border-collapse: collapse;
      }
    </style>
</head>
<body>
    <?php 
    require_once('models/database.php');
    require_once('models/db_posts.php');
    require_once('models/db_comments.php');
    $dbh = initDatabse();
    //var_dump(query($dbh));
    ?>

    <h1>Poste :</h1>
 
    <div class="container mt-3">
    <table class="table table-striped">
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
        <td> <a href='commentaire.php?post=".$cas['id']."'>Voir</a> </td>
        </tr>";

      }
      
      ?>

    </table>
    </div>
</body>
</html>