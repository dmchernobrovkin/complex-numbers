<?php


namespace Math;


class ComplexNumber
{
    /**
     * @var float действительная часть
     */
    private float $re;

    /**
     * @var float мнимая часть
     */
    private float $im;

    /**
     * ComplexNumber constructor.
     * @param float $re
     * @param float $im
     */
    public function __construct(float $re, float $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    /**
     * Получить действительную часть
     * @return float
     */
    public function getRealPart(): float
    {
        return $this->re;
    }

    /**
     * Получить мнимую часть
     * @return float
     */
    public function getImaginaryPart(): float
    {
        return $this->im;
    }

    /**
     * Прибавить другое комплексное число
     * @param ComplexNumber $otherNumber
     * @return $this
     */
    public function add(ComplexNumber $otherNumber): ComplexNumber
    {
        $this->re += $otherNumber->re;
        $this->im += $otherNumber->im;

        return $this;
    }

    /**
     * Вычесть другое комплексное число
     * @param ComplexNumber $otherNumber
     * @return $this
     */
    public function diff(ComplexNumber $otherNumber): ComplexNumber
    {
        $this->re -= $otherNumber->re;
        $this->im -= $otherNumber->im;

        return $this;
    }

    /**
     * Умножить на другое комплексное число
     * @param ComplexNumber $otherNumber
     * @return $this
     */
    public function multiply(ComplexNumber $otherNumber): ComplexNumber
    {

        $re = $this->re * $otherNumber->re - $this->im * $otherNumber->im;
        $im = $this->im * $otherNumber->re + $this->re * $otherNumber->im;
        $this->re = $re;
        $this->im = $im;

        return $this;
    }

    /**
     * Разделить на другое комплексное число
     * @param ComplexNumber $otherNumber
     * @return $this
     */
    public function divide(ComplexNumber $otherNumber): ComplexNumber
    {
        $denominator = $otherNumber->re ** 2 + $otherNumber->im ** 2;
        $re = ($this->re * $otherNumber->re + $this->im * $otherNumber->im) / $denominator;
        $im = ($this->im * $otherNumber->re - $this->re * $otherNumber->im) / $denominator;
        $this->re = $re;
        $this->im = $im;

        return $this;
    }
}