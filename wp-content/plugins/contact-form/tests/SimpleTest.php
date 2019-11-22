<?php

use PHPUnit\Framework\TestCase;
class SimpleTest extends TestCase
{
    public function testAdding()
    {
        $this->assertEquals(1 + 1, 2);
        $this->assertEquals(2 + 2, 5);
    }
}