<?php


namespace App\Domain\ValueObjects;


final class Name
{
    private $Value;

    public function __construct(String $value){
        $this->Value = $value;
    }

    public function value(){
        return $this->Value;
    }
}