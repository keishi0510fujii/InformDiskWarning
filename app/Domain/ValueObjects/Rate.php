<?php


namespace App\Domain\ValueObjects;


final class Rate
{
    private $Value;
    private $DecimalPoint;

    public function __construct(float $value, int $decimal_point)
    {
        $this->Value = $value;
        $this->DecimalPoint = $decimal_point;
    }

    public function value(){ return $this->Value; }
    public function decimalPoint(){ return $this->DecimalPoint; }

    // return floor
    public function roundFloor()
    {
        return round($this->Value - 0.5 * pow(0.1, $this->DecimalPoint), $this->DecimalPoint);
    }

    // return ceil
    public function roundCeil()
    {
        return round($this->Value + 0.5 * pow(0.1, $this->DecimalPoint), $this->DecimalPoint);
    }
}