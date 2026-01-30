<?php
class Character {

    private string $name;
    private int $age;
    private string $genre;
    private string $species;

    public function __construct($name,$genre, $species='humano',$age=-1){
        $this->name=$name;
        $this->age=$this->checkAge($age)? $age : -1;
        $this->genre=$genre;
        $this->species=$this->checkSpecies($species)? $species : 'desconocido' ;
    }

    private function checkAge($age): bool{
        if($age<0){
            $devolver=false;
        }
            else{$devolver=true;}
        return $devolver;
    }

    private function checkSpecies($species): bool{   
    //si contiene un número no es valido.
        $devolver=true;

            if($species=='0'||$species=='1'||$species=='2'||$species=='3'||$species=='4'||$species=='5'||$species=='6'||$species=='7'||$species=='8'||$species=='9'){
                $devolver=false;
            }
            return $devolver;    
        }

    public function __get($property){
        return $this->$property;
    }
    public function __set($property, $value){

        if($property=='age'){

            if($this->checkAge($value)){
                $this->$property=$value;
            }
            else{$this->$property=-1;}
        }
        else {$this->$property=$value;}

        if($property=='species'){

            if($this->checkSpecies($value)){$this->$property=$value;}

                else{$this->$property='desconocida';}
        }
    }
}

