<?php


namespace App\Domain\ValueObjects;


class Rate
{
    private $Value;
    private $DecimalPoint;

    public function __construct(Double $value, Integer $decimal_point)
    {
        $this->Value = $value;
        $this->DecimalPoint = $decimal_point;
    }

    public function value(){ return $this->Value; }
    public function decimalPoint(){ return $this->DecimalPoint; }

}