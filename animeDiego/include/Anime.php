<?php

class Anime {

    private string $title;
    private string $author;
    private int $year;
    private string $genre;
    private int $episodes;
    private array $characterArray=[];
    public function __construct($title, $author ,$genre, $episodes,$year=-1){

        $this->title=$title;
        $this->author=$author;
        $this->year=$this->checkYear($year)?$year :-1;
        $this->genre=$this->checkGenre($genre)? $genre : 'desconocido';
        $this->episodes=$episodes;
    }

    private function checkYear($year): bool{
        $yearbol=false;
        if($year>1917){
            $yearbol=true;
        }  
            else{$yearbol=false;}
        return $yearbol;
    }
    private function checkGenre($genre): bool{
        $genrebol=false;
        if($genre=='Kodomo'|| $genre=='seinen'||$genre=='shonen'||$genre=='Shojo'||$genre=='Josei'){
            $genrebol=true;
        }  
            else{$genrebol=false;}
        return $genrebol;
    }
    public function countCharacters(): int{
        $count=0;
        foreach($this->characterArray as $value){
            $count+=1;
        }
        return $count;
    }
    public function addCharacter($Character): bool {
        
        if($this->checkCharacter($Character)){
            $this->characterArray[]=$Character;
            return true;
        }
            else return false;
    }
    private function checkCharacter($Character):bool{
        $charbol=true;
        foreach($this->characterArray as $value){
            if($Character == $value){
                $charbol=false;
            }
        }
        return $charbol;
    }
    public function removeCharacter($string):bool{
        
        foreach($this->characterArray as $value){
            if($value->name ==$string){unset($this->characterArray[$value]);}
            return true;
        }
        return false;
    }

    public function __get($property){
        return $this->$property;
    }
    public function __set($property, $value){
        
        if($property=='genre'){
            $this->genre=$this->checkGenre($value)?$value :'desconocido'; 

       }
        if($property=='year'){
            $this->year=$this->checkYear($value)?$value :'desconocido'; 
       }
    }    

}




