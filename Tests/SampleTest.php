<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testFunc()
    {
//      phpunitの動作確認として、失敗するテストを行った。
//      失敗することが確認できたので、コメントアウト
        #$this->assertEquals(3, 2+2);
        $this->assertEquals(4, 2 + 2);
        $this->assertNotEquals(3, 2, 2);
    }
}