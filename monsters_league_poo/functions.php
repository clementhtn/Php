<?php
require __DIR__ . '/monster.php';
    
$monster1 = new Monster();
$monster1 ->func_set_name("Domovoi");
$monster1 ->func_set_strength("Htn");
$monster1 ->func_set_life("21");
$monster1 ->func_set_type("blue");

$monster2 = new Monster();
$monster2 ->func_set_name("Lirth");
$monster2 ->func_set_strength("Zarck");
$monster2 ->func_set_life("25");
$monster2 ->func_set_type("red");

$monster3 = new Monster();
$monster3 ->func_set_name("Notoî");
$monster3 ->func_set_strength("Shark");
$monster3 ->func_set_life("19");
$monster3 ->func_set_type("white");

$monster4 = new Monster();
$monster4 ->func_set_name("Werzey");
$monster4 ->func_set_strength("Chacal");
$monster4 ->func_set_life("27");
$monster4 ->func_set_type("yellow");

function getMonsters()
{ 
    $monster1 = new Monster();
$monster1 ->func_set_name("Domovoi");
$monster1 ->func_set_strength("16");
$monster1 ->func_set_life("21");
$monster1 ->func_set_type("blue");

$monster2 = new Monster();
$monster2 ->func_set_name("Lirth");
$monster2 ->func_set_strength("9");
$monster2 ->func_set_life("25");
$monster2 ->func_set_type("red");

$monster3 = new Monster();
$monster3 ->func_set_name("Notoî");
$monster3 ->func_set_strength("22");
$monster3 ->func_set_life("19");
$monster3 ->func_set_type("white");

$monster4 = new Monster();
$monster4 ->func_set_name("Werzey");
$monster4 ->func_set_strength("30");
$monster4 ->func_set_life("27");
$monster4 ->func_set_type("yellow");
    $monsters=[$monster1, $monster2, $monster3, $monster4];
    return $monsters;
}       
/**
 * Our complex fighting algorithm!
 *
 * 
 */
function fight(monster $firstMonster, monster $secondMonster)
{
    $firstMonsterLife = $firstMonster->func_get_life();
    $secondMonsterLife = $secondMonster->func_get_life();

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster->func_get_strength();
        $secondMonsterLife = $secondMonsterLife - $firstMonster->func_get_strength();
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