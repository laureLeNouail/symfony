<?php

/**
 * Initialisation de la connexion à la base de données
 *
 * @author Fabien Bellanger
 * @return PDO|bool
 */
function initDatabse(): ?PDO
{
    try
    {
        $host     = 'mvc-mysql';
        $username = 'lpweb';
        $password = 'lpweb';
        $name     = 'lpweb_mvc';
    
        return new PDO("mysql:host=$host;dbname=$name", $username, $password);
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}

function query($dbh){
    $sth=$dbh->query('SELECT * FROM posts');
    $sth->execute();

    $rows = $sth->fetchAll();
    return($rows);
}

