<?php

namespace Tests\Domain\ValuoObjects;

use PHPUnit\Framework\TestCase;

use App\Domain\ValueObjects\Rate;

class RateTest extends TestCase
{
    public function test小数点指定桁数未満切り捨て()
    {
        $rate = new Rate(123.45999, 2);
        $result = $rate->roundFloor();

        $this->assertEquals(123.45, $result);
        $this->assertNotEquals(123.44, $result);

    }

    public function test小数点指定桁数未満切り上げ()
    {
        $rate = new Rate(123.45001, 2);
        $result = $rate->roundCeil();

        $this->assertEquals(123.46, $result);
        $this->assertNotEquals(123.45, $result);
    }
}
