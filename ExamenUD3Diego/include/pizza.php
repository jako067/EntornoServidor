<?php

class pizza{

    private String $name;
    private float $basePrice;
    private string $size;

    public function __construct(string $name, float $basePrice, string $size='M')
    {
    $this->name=$name;
    $this->basePrice=$basePrice;
    $this->size=$this->checkSize($size);
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }
    public function __set(string $property, mixed $value)  {
        if($property=='size'){
            $value=$this->checkSize($property);
        }
        $this->property=$value;

    }

    private function checkSize(string $size): string{
        if($size='M'||$size='S'||$size='L'||$size='XL'){
            return $size;
        }

        else{$size='M';}

        return $size;
    }

}
