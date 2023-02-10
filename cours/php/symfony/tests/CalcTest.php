<?php

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{

    public function testTrueOrDare()
    {
        $action = true;

        $this->assertTrue($action);
    }
}