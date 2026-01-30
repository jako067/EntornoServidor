<?php
include($_SERVER['DOCUMENT_ROOT'] .'/include/Character.php');
include($_SERVER['DOCUMENT_ROOT'] .'/include/Anime.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>
<body>

<?php

    $drStone= new Anime('drStone', 'Boichi' ,'Shonen', 60 ,2023);
    $animeArray=[$drStone];
    $shnk= new Anime('shnk', 'Isayama' ,'Seinen', 90 ,2016);
    $animeArray[]= $shnk;
    $grandBlue= new Anime('GrandBlue', 'Kenji' ,'Seinen', 24 ,2020);
    $animeArray[]= $grandBlue;

    $ch1 = new Character('senku','masc','human',16);
    $ch2 = new Character('tsukasa','masc','human',18);
    $ch3 = new Character('mikasa','fem','human',18);
    $ch4 = new Character('gabi','fem','human',12);

    $shnk->addCharacter($ch1);
    $shnk->addCharacter($ch2);
    $grandBlue->addCharacter($ch3);
    $grandBlue->addCharacter($ch4);

    
    echo '<h1> Animes </h1>';
    echo '<div>';
    echo '<h2>'.$shnk -> title .'</h2>';
    echo 'Author: '.$shnk->author;
    echo '<br>Episodes: '.$shnk->episodes;

    echo '<h3> Personajes </h3>';
    echo '<ul>';
    foreach($shnk->characterArray as $value){
        echo '<li>'.$value->name . '</li> ';
    }
    echo '</ul>';
    echo '</div>';
    echo '<div>';
    echo '<h2>'.$grandBlue -> title .'</h2>';
    echo 'Author: '.$grandBlue->author;
    echo '<br>Episodes: '.$grandBlue->episodes;
    echo '<h3> Personajes </h3>';
        echo '<ul>';
    foreach($grandBlue->characterArray as $value){
        echo '<li>'.$value->name . '</li> ';
    }
    echo '</ul>';
    echo '</div>';
?>

    <footer>
        <img src="./imgs/foto.jpeg" alt="fotodiego" width="200">
    </footer>
</body>
</html>         