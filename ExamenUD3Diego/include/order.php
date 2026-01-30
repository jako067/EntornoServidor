<?php

use Dom\Element;

require_once('C:\laragon\www\ExamenUD3Diego\include\pizza.php') ;
require_once('C:\laragon\www\ExamenUD3Diego\include\customer.php') ;
class order{
    private string $name;
    private float $discount;
    private float $iva;
    private Array $pizzaArray;
    private customer $customer;

    public function __construct(String $name, float $discount=0, float $iva=10){
        
        $this->name=$name;
        $this->discount=$discount;
        $this->iva=$iva;
        $this->pizzaArray=[];

    }

    public function __get(string $property): mixed {
        return $this->property;
    }
    public function __set(string $property, mixed $value)  {
        $this->property=$value;
    }
    public function finalPrice(): float{
        $finalPrice=0;

        //Esto está mal He probado tambien con get('size'), pero me dice que le metodo get no existe
        for ($i=0; $i < count($this->pizzaArray); $i++) { 
            $finalPrice+=$this->pizzaArray[$i]->basePrize;
            if($this->pizzaArray[$i]->size=='S'){
                $finalPrice--;
            }
            if($this->pizzaArray[$i]->size=='L'){
                $finalPrice+=1.5;
            }
            if($this->pizzaArray[$i]->size=='XL'){
                $finalPrice+=2.5;
            }
        }
        if($this->discount>0){
            $finalPrice-=$finalPrice*$this->discount/100;
        }
        $finalPrice+=$finalPrice*$this->iva/100;
        return $finalPrice;
   }

    public function addPizza(pizza $pizza){
        $this->pizzaArray[]=$pizza;
    }
    public function addMember(customer $customer){
        $this->customer=$customer;
    }

}