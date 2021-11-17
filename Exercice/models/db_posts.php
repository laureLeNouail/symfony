<?php 

function query($dbh){
    $sth=$dbh->query('SELECT * FROM posts');
    $sth->execute();

    $rows = $sth->fetchAll();
    return($rows);
}

?>