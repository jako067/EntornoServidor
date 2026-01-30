<?php
//require_once($_SERVER(['DOCUMENT_ROOT'] . 'EXAMENUD3DIEGO/include/driver.php'));
require_once('C:\laragon\www\ExamenUD3Diego\include\driver.php') ;
require_once('C:\laragon\www\ExamenUD3Diego\include\order.php') ;
require_once('C:\laragon\www\ExamenUD3Diego\include\pizza.php') ;
require_once('C:\laragon\www\ExamenUD3Diego\include\customer.php') ;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $order2 = new order("Pedido Rick",8);
    $rick = new customer("Rick Sanchez", true);
    $pizza1=new Pizza("Barbacoa",12);
    $pizza2=new Pizza("Carbonara",14.5);
    $pizza3=new Pizza("Margarita",9.5);
    $pizza4=new Pizza("Hawaiana",15.5);
    $pizza5=new Pizza("Personalizada",15.5);
    $pizza6=new Pizza("Personalizada2",15.5);
    $order2->addPizza($pizza1);
    $order2->addPizza($pizza2);
    $order2->addPizza($pizza3);
    $order2->addPizza($pizza4);
    $order2->addPizza($pizza5);
    $order2->addPizza($pizza6);
    
    echo $pizza1->__get('name');
    echo $pizza2->name;
    echo $pizza3->name;
    echo $pizza4->name;
    echo $pizza5->name;
    echo $pizza6->name;


    echo '<pre>';
    var_dump($order2);
    echo '</pre>';





?>

</body>
</html>