<?php

class customer{

    private String $name;
    private bool $member;

    public function __construct(string $name, bool $member=false)
    {
    $this->name=$name;
    $this->member=$member;
    }

    public function __get(string $property): mixed {
        return $this->$property;
    }
    public function __set(string $property, mixed $value)  {
        $this->$property=$value;
    }

}



