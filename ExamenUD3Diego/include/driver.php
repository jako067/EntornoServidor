<?php

class driver{
    private string $name;
    private int $travels;
    private float $km;
    private float $balance;
    private bool $active;

    public function __constructor(string $name, int $travels=0, float $km=0, float $balance=0, bool $active=true){
        
        $this->name= $name;
        $this->travels= ($travels<0)?0 :$travels ;
        $this->km= ($km<0)?0 :$km;
        $this->balance= ($balance<0)?0 :$balance ;
        $this->active= $active;

    }

    public function __get(string $property): mixed {
        return $this->property;
    }
    public function __set(string $property, mixed $value)  {
        if($property='balance'||$property='travels'||$property='km'){

        }
        else{
        $this->property=$value;
        }
    }

    public function travelRegistration(int $kmin): bool{
        
        if($this->active&&$kmin>0){
            $this->travels++;
            $this->km+=$kmin;
            $this->balance+=$kmin*1.9;

            return true;
        }
        return false;
    }

        public function resetDriver(): void{
        
            $this->travels=0;
            $this->km+=0;
            $this->balance+=0;
            $this->active=true;
    }

}
