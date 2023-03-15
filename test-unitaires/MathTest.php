<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition()
    {
        require_once('Math.php');

        $math = new Math();
        $result = $math->add(1, 2);

        $this->assertEquals(3, $result);
    }
}
