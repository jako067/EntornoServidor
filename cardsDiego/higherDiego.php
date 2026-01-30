<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/include/getdeck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>higherDiego</title>
    <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
    <h1>CardsDiego</h1>
<?php

    require_once($_SERVER['DOCUMENT_ROOT'].'/include/header.php');

    $deck = getdeck();
    $namep1=("Superman");
    $namep2=("Batman");
    shuffle($deck); 

    for ($i=0;$i<10;$i++){

        $player1[]= array_pop($deck);
        $player2[]= array_pop($deck);
    }
    echo "<h2>Estas son sus cartas, ".$namep1.":</h2> <br><br>";
    for ($i=0;$i<10;$i++){

        echo'<img src=/imgs/baraja/'. $player1[$i]["image"].' alt="imagen principal" height="200"> ' ; 
    }
    echo "<br> <br>";
    echo "<h2>Estas son sus cartas, ".$namep2.":</h2> <br><br>";
     for ($i=0;$i<10;$i++){

        echo '<img src=/imgs/baraja/'. $player2[$i]["image"].' alt="imagen principal" height="200"> '; 
     }

     //Aquí empezamos con la comparación.
    echo'<br>';
     $score1=0;
     $score2=0;
     for($i=0;$i<10;$i++){

         
        if($player2[$i]["suit"]=="comodin" && $player1[$i]["suit"]==$player2[$i]["suit"]){
            if($score1>$score2){
            $score1-=2;
            }
            if($score1>$score2){
            $score2-=2;
            }
            echo 'doble comodin, wtf <br>'." PUNTUACIÓN: ".$score1." ".$score2." <br>";}

        
        else if($player1[$i]["suit"]=="comodin"){
            echo"el encuentro".$i." lo gana".$namep1." PUNTUACIÓN: ".$score1." ".$score2." <br>";
            $score1+=2;
            $score2-=1;
            }
        
        else if($player2[$i]["suit"]=="comodin"){
            $score2+=2;
            $score1-=1;
            echo "el encuentro".$i." lo gana el".$namep2." PUNTUACIÓN: ".$score1." ".$score2." <br>";}  
        
        else if($player1[$i]["value"]=="K"&&$player2[$i]["value"]=="Q"){ 

            $score1+=2;
            echo "el encuentro".$i." lo gana".$namep1." PUNTUACIÓN: ".$score1." ".$score2." <br>";}  
        else if($player1[$i]["value"]=="Q"&&$player2[$i]["value"]=="K"){

             $score2+=2;
            echo "el encuentro".$i." lo gana ".$namep2." PUNTUACIÓN: ".$score1." ".$score2." <br>";}  

        else if($player1[$i]["value"]>$player2[$i]["value"]){
            $score1+=2;
            echo "el encuentro".$i." lo gana ".$namep1." PUNTUACIÓN: ".$score1." ".$score2."<br>";}

        else if($player1[$i]["value"]<$player2[$i]["value"]){
            $score2+=2;
            echo "el encuentro".$i." lo gana ".$namep2." PUNTUACIÓN: ".$score1." ".$score2."<br>";}

        else if($player1[$i]["value"]==$player2[$i]["value"]){
            $score1+=1;
            $score2+=1;
            echo "el encuentro".$i." Es empate "." PUNTUACIÓN: ".$score1." ".$score2. " <br>";}
            }

    //resultados

    if($score1>$score2){
        echo '<h3>felicidades, ganaste :3 '.$namep1.'</h3>';
    }
    else if($score2>$score1){
        echo '<h3>felicidades, ganaste :3 '.$namep2.'</h3>';
    }
    else if($score2==$score1){
        echo '<h3>'.$namep1.' y '.$namep2.'EMPATARON </h3>';
    }

    echo '<br><h3>Puntuación finall de '.$namep1.' : '.$score1.'</h3>';
    echo '<br><h3>Puntuación finall de '.$namep2.' : '.$score2.'</h3>';

?>

</body>
</html>