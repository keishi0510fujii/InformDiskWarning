<?php


namespace App\Domain\ValueObjects;


use phpDocumentor\Reflection\Types\Boolean;

final class IsValid
{
    private $Value;

    public function __construct(Boolean $value)
    {
        $this->Value = $value;
    }

    public function value(){ return $this->Value; }
}