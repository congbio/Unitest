<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private $array;

    public function testTrueIsTrue()
    {
        $valiable = true;
        $this->assertTrue($valiable);
    }

    public function setUp(): void
    {
        $this->array = [];
    }
    public function testEmpty()
    {
        $this->assertTrue(empty($this->array));
    }

    public function testPush()
    {
        array_push($this->array, 'data');

        $this->assertSame('data', $this->array[count($this->array) - 1]);
        $this->assertTrue(!empty($this->array));
    }

    public function testPop()
    {
        array_push($this->array, 'data');

        $this->assertSame('data', array_pop($this->array));
        $this->assertTrue(empty($this->array));
    }
}