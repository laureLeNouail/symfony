<?php

function query2($dbh,$id){
    $sth=$dbh->query("SELECT * FROM comments WHERE post_id=$id");
    $sth->execute();

    $rows = $sth->fetchAll();
    return($rows);
}


?>