<?php


namespace Math;

use PHPUnit\Framework\TestCase;


class ComplexNumberTest extends TestCase
{
    private ComplexNumber $complexNumber;
    private ComplexNumber $otherNumber;

    public function setUp(): void
    {
        $this->complexNumber = new ComplexNumber(2, 5);
        $this->otherNumber = new ComplexNumber(1, 3);
    }

    public function testAdd()
    {
        $this->complexNumber->add($this->otherNumber);
        $this->assertEquals(3, $this->complexNumber->getRealPart());
        $this->assertEquals(8, $this->complexNumber->getImaginaryPart());
    }

    public function testDiff()
    {
        $this->complexNumber->diff($this->otherNumber);
        $this->assertEquals(1, $this->complexNumber->getRealPart());
        $this->assertEquals(2, $this->complexNumber->getImaginaryPart());
    }

    public function testMultiply()
    {
        $this->complexNumber->multiply($this->otherNumber);
        $this->assertEquals(-13, $this->complexNumber->getRealPart());
        $this->assertEquals(11, $this->complexNumber->getImaginaryPart());
    }

    public function testDivide()
    {
        $this->complexNumber->divide($this->otherNumber);
        $this->assertEquals(1.7, $this->complexNumber->getRealPart());
        $this->assertEquals(-0.1, $this->complexNumber->getImaginaryPart());
    }
}