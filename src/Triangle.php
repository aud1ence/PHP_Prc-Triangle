<?php
namespace src;

class Triangle implements Shape
{
    public float $side1;
    public float $side2;
    public float $side3;
    public string $color;
    protected float $sideA;
    protected float $sideB;
    protected float $sideC;

    public function __construct()
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
        $this->color = "black";
    }

    /**
     * @return float
     */
    public function getSide1(): float
    {
        return $this->side1;
    }

    /**
     * @param float $side1
     */
    public function setSide1(float $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide2(): float
    {
        return $this->side2;
    }

    /**
     * @param float $side2
     */
    public function setSide2(float $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide3(): float
    {
        return $this->side3;
    }

    /**
     * @param float $side3
     */
    public function setSide3(float $side3): void
    {
        $this->side3 = $side3;
    }

    public function setColor(string $color):void
    {
        $this->color = $color;
    }

    public function getArea()
    {
        $this->sideA =$this->side1 + $this->side2 - $this->side3;
        $this->sideB =$this->side2 + $this->side3 - $this->side1;
        $this->sideC =$this->side3 + $this->side2 - $this->side2;
       return pow(($this->sideA*$this->sideB*$this->sideC),0.5)/4;
    }
    public function getPerimeter(): string
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString(): string
    {
        return "side1: {$this->side1}<br>side2: {$this->side2}<br>side3: {$this->side3}<br>Area: {$this->getArea()}<br>Per: {$this->getPerimeter()}<br>Color: {$this->color}";
    }

}