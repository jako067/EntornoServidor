    <?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/include/getdeck.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/include/header.php');
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blackJack</title>
    <link rel="stylesheet" href="/styles/styles.css">

</head>
<body>
     <h1>blackJack</h1>
<?php
    echo '<table><tr><td>';
    $deck = getdeck();
    array_pop($deck);
    array_pop($deck);
    shuffle($deck);
    $names=['Capi','Hulk','Thor','Widow','Spider','Crupier'];
    $players = [];
    $points = [];
    foreach ($names as $name) {
        $players[$name] = [];
        $points[$name] = 0;
    }
    for ($i = 0; $i < 2; $i++) {
        foreach ($names as $name) {
            $players[$name][] = array_pop($deck);
        }
    }

    //Calculemos los puntos 

    foreach ($names as $name) {
        for($i=0;$i<2;$i++){
            if($players[$name][$i]["value"]=='K'||$players[$name][$i]["value"]=='J'||$players[$name][$i]["value"]=='Q'){
                $players[$name][$i]["value"]=10;
            }
            if($players[$name][$i]["value"]=='1'){
                if($points[$name]>10){
                    $players[$name][$i]["value"]=1;
                }
                else{
                    $players[$name][$i]["value"]=11;

                }
            }
            $points[$name]+=$players[$name][$i]["value"];
        }    
    
        while($points[$name]<14){
            $players[$name][] = array_pop($deck);

            if($players[$name][$i]["value"]=='1'){
                if($points[$name]>10){
                    $players[$name][$i]["value"]=1;
                }
                else{
                    $players[$name][$i]["value"]=11;
                }
            }            
            if($players[$name][$i]["value"]=='K'||$players[$name][$i]["value"]=='J'||$players[$name][$i]["value"]=='Q'){
                    $players[$name][$i]["value"]=10;
                }
            if($points[$name]>21){
                foreach($players[$name] as $key){
                    if($key['value']=='1'){
                    }
                }
            }
            $points[$name]+=$players[$name][$i]["value"];
            $i++;
        }
    }

    //mostrar cartas
    echo '<div class="players">';
    foreach ($names as $name) {
        echo '<div class="player">';
        echo "<h2>Estas son sus cartas, ".$name.":</h2><br>";  
        echo '<div class="cards">';
        foreach($players[$name] as $key){
            echo'<img src=/imgs/baraja/'. $key["image"].' alt="imagen principal" height="170"> ' ;
        }
        echo '</div>';
        echo '</div>';        
    }
    echo '</div>';
    echo '<br><br></td><td>';
    
    //imprimir puntos
    $j=0;   
    $pointsInt=[];
    foreach($points as $value){

        echo 'Estos son sus puntos jugador: '.$names[$j] .' ' .$value.'<br><br><br><br><br>';
        $pointsInt[]=$value;
        if($names[$j]=='Crupier'){$crupValue=$value;}
        $j++;
    }
    echo '</td><td>';

    for ($i=0;$i<5;$i++){
        if($crupValue<$pointsInt[$i]&&$pointsInt[$i]<=21){
            echo 'Usted ha ganado, jugador: ' .$names[$i].'<br><br><br><br><br><br>';
        }
        if($crupValue>21&&$pointsInt[$i]<=21){
            echo 'Usted ha ganado, jugador: ' .$names[$i].'<br><br><br><br><br><br>';
        }
        
    }
        echo '</td></tr></table>';

?>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/include/footer.html');
?>
</body>
</html>