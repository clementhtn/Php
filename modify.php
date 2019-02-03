<?php
require __DIR__ . '/functions.php';

$monsters = monstres();
$monster = isset($_POST['modify_monster']) ? $_POST['modify_monster'] : null;

if (!isset($monsters[$monster])) {
    header('Location: /index.php?error=bad_ships');
    die;
}

$firstMonster = $monsters[$monster];

function modify($name,$age,$weight){
    $pdo = new PDO("mysql:dbname=php_monstres;port=3309;host=localhost","root", null);
    $sql ='UPDATE monstre SET age='.$age.', weight='.$weight.' WHERE name="'.$name.'"';
    $requet = $pdo->query($sql);
}

modify($firstMonster->func_get_name(), $_POST['Strength'], $_POST['Life']);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
        </div>

        <div style='margin-left:50px'>
        <h2> Le monstre <Strong><?php echo $firstMonster->func_get_name() ?></Strong> vient d'être modifié !</h2>
        <br>
        <a href="index.php"><img src="giphy.gif"></a>
        <br>
        </div>
        <footer>
            <div class="container">
                <br>
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>