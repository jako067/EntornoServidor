<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generatingDiego</title>
</head>
<body>
    
    <?php
    echo '<ul>';
    for ($i=1;$i<6;$i++){
        echo '<li> <a href= "#sec' .$i .'" id= "sec' . $i.'">Sección' . $i . '</a></li>';
    }
    echo'</ul>';

    echo '<section>';

        echo '<h1 class=#sec1> Negativo -cero- Positivo </h1> <br>';
        
        $random=rand(-200,200);
        echo $random . '<br>';
        if($random<0){ echo 'es menor que 0';}
        
        if($random==0){ echo 'es igual que 0';}
        if($random>0){ echo 'es mayor que 0';}

        echo '<h1 class=#sec2> Nota media</h1> <br>';
        $nota=rand(0,10);
        echo $nota . '<br>';
        switch($nota){
            case 0: 
            case 1:
            case 2:
                echo 'insuficiente';
                break;
            case 3:
            case 4:
                echo 'necesita mejorar';
                break;
            case 5:
                echo 'aprobado justito';
                break;
            case 6:
                echo 'aprobado';
                break;
            case 7:
                echo 'notable bajo';
                break;
            case 8:
                echo 'notable';
                break;
            case 9:
            case 10:
                echo 'sobresaliente';
                break;
            default: echo 'no valido';

        }

        echo '<h1 class=#sec3> Tabla de multiplicar </h1> <br>';
        
        $multi=rand(0,100);
        echo $multi . '<br>';

        echo '<table border=1>';

        echo' <tr>' ;

        for ($i=0;$i<21;$i++){
            echo' <td>'.$multi.'X'.$i.'</td>'; 
        }

        echo' </tr>' ;

        echo' <tr>' ;

            for ($i=0;$i<21;$i++){
            echo' <td>'.$multi * $i.'</td>'; 
        }

        echo' </tr>' ;


        echo '</table>' ;

        
        
        $multi=rand(0,10);
        $multi2=rand(0,10);
        echo '<h1 class=#sec4> Tabla de multiplicar'.$multi.' X ' . $multi2 .' </h1> <br>';
        echo '<table border=1>';


        for ($i=0;$i<$multi+1;$i++){
            echo '<tr>';
            for ($j=0;$j<$multi2+1;$j++){
            echo' <td>'.$j.'X'.$i.'</td>'; 
            }
            echo '</tr>';
        }

        echo '</table>' ;

        echo '<h1 class=#sec5> Vuelto </h1> <br>';
       
        $rando=rand(1,1000);
            echo $rando .'<br>';
        $b500=intval($rando/500);
        echo $b500 . 'billetes de 500 ';
        $b200=intval(($b500 -intval($rando/500)*500)/200);
        echo $b200 . 'billetes de 200 ';
        $b100=intval(($b200 -intval($rando/200)*200)/100);
        echo $b100 . 'billetes de 100 ';
        $b50=intval(($b100 -intval($rando/100)*100)/50);
        $b20=intval(($b50 -intval($rando/50)*50)/20);
        $b10=intval(($b20 -intval($rando/20)*20)/10);
        $b5=intval(($b10 -intval($rando/10)*10)/5);
        $b2=intval(($b5 -intval($rando/5)*5)/2);
        $b1=intval(($b2 -intval($rando/2)*2)/1);
    echo '</section>';
    
    ?>
    
</body>
</html>