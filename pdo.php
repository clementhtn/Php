<?php

/**
 * Fonction qui récupère base de données
 * Retourne array contenant array de monstres
 */
function donnees()
{ 
    try {
        $pdo = new PDO("mysql:dbname=php_monstres;port=3309;host=localhost","root", null); //fonctionne sur le port 3309   
        $requet = $pdo->query("SELECT * from monstre");
        $rows = $requet->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $rows;
}
?>