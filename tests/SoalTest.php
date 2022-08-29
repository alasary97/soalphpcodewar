<?php

namespace Alasary97\Phptest;

use PHPUnit\Framework\TestCase;
use Alasary97\Phptest\Soal;

final class SoalTest extends TestCase
{
    public $soal;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->soal = new Soal;
    }

    public function testThatSummationWorksForExampleTests()
    {
        $this->assertEquals($this->soal->summation(1), 1);
        $this->assertEquals($this->soal->summation(2), 3);
        $this->assertEquals($this->soal->summation(3), 6);
        $this->assertEquals($this->soal->summation(4), 10);
        $this->assertEquals($this->soal->summation(5), 15);
    }

    public function testTwiceAsOld()
    {
        $this->assertEquals($this->soal->twice_as_old(36, 7), 22);
        $this->assertEquals($this->soal->twice_as_old(55, 30), 5);
        $this->assertEquals($this->soal->twice_as_old(42, 21), 0);
        $this->assertEquals($this->soal->twice_as_old(22, 1), 20);
        $this->assertEquals($this->soal->twice_as_old(29, 0), 29);
    }

    public function testEvenOrOdd() 
    {
        $this->assertEquals("Even", $this->soal->even_or_odd(2));
        $this->assertEquals("Even", $this->soal->even_or_odd(0));
        $this->assertEquals("Odd", $this->soal->even_or_odd(7));
        $this->assertEquals("Odd", $this->soal->even_or_odd(1));
        $this->assertEquals("Odd", $this->soal->even_or_odd(-1));
    }

    public function testXo()
    {
        $this->assertEquals(true, $this->soal->XO('xo'));
        $this->assertEquals(true, $this->soal->XO('XO'));
        $this->assertEquals(true, $this->soal->XO('xo0'));
        $this->assertEquals(false, $this->soal->XO('xxxoo'));
        $this->assertEquals(true, $this->soal->XO("xxOo"));
    }

    public function testPositiveSum()
    {
        $this->assertEquals(15, $this->soal->positive_sum([1, 2, 3, 4, 5]));
        $this->assertEquals(13, $this->soal->positive_sum([1, -2, 3, 4, 5]));
        $this->assertEquals(0, $this->soal->positive_sum([]));
        $this->assertEquals(0, $this->soal->positive_sum([-1, -2, -3, -4, -5]));
        $this->assertEquals(9, $this->soal->positive_sum([-1, 2, 3, 4, -5]));
    }
}
