<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Commentaires</title>
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
    $id=$_GET['post'];
    ?>

    <h1>Commentaire : </h1>


    <a href="index.php" class="btn btn-primary" role="button">Liste des posts</a>
    </br>
    <div class="container mt-3">
    <table class="table table-striped">
      <tr>
        <th>Id</th>
        <th>Description</th>
        <th>Créé le</th>
      </tr>


    <?php 
      $rows=query2($dbh,$id);
      foreach($rows as $cas){
        echo"<tr>
            <td>" .$cas["id"]."</td>
            <td>" .$cas["description"]."</td>
            <td>" .$cas["created_at"]."</td>
        </tr>";

      }
      
      ?>
      </table>
      </div>
 
  
</body>
</html>