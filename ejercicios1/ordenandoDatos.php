<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=[];
    for ($i=0;$i<10;$i++){
        $var=rand(1,100); 
        $array[$i]=$var;
        echo $array[$i] . ' ; ';
    }; 

    echo '<br> <br>';
    for ($i=0;$i<10;$i++){
        $min_index=$i;
        for($j=$i+1;$j<10;$j++){
        if ($array[$j] < $array[$min_index]){
            $min_index = $j;
        }
        }

        if ($min_index != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$min_index];
            $array[$min_index] = $temp;
        }

    }

        for ($i=0;$i<10;$i++){
        echo $array[$i] . ' ; ';
    }
    
    
?>


</body>
</html>