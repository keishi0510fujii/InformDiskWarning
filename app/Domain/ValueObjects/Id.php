<?php


namespace App\Domain\ValueObjects;


final class Id
{
    private $Value;

    public function value(){ return $this->Value; }
}