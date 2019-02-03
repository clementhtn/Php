<?php
require __DIR__ . '/monster.php';
require __DIR__ . '/pdo.php';

/**
 * Fonction qui initialise chaque monstre 
 * 
 */
function monstres()
{
    $donnees=donnees();
    $m= array();
    foreach($donnees as $i){
        $monster = new Monster();
        $monster ->func_set_name($i['name']);
        $monster ->func_set_age($i['age']);
        $monster ->func_set_weight($i['weight']);
        $monster ->func_set_bio($i['bio']);
        array_push($m, $monster);
    }
    return $m;
}
     
/**
 * Our complex fighting algorithm!
 *
 * 
 */
function fight(monster $firstMonster, monster $secondMonster)
{
    $firstMonsterLife = $firstMonster->func_get_weight(); //La vie du monstre correspond à son poids.
    $secondMonsterLife = $secondMonster->func_get_weight();

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster->func_get_age(); //Sa puissance correp. à son age
        $secondMonsterLife = $secondMonsterLife - $firstMonster->func_get_age();
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return [$winner, $looser];
}
?>