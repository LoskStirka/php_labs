<?php

class Calculator 
{
    public float $calculatingString;

    public function __construct(int $calculatingString)
    {
        $this->calculatingString = $calculatingString;
    }

    public function sum(int $calculatingString): self
    {
        $this->calculatingString += $calculatingString;
        return $this;
    }

    public function minus(int $calculatingString): self
    {
        $this->calculatingString -= $calculatingString;
        return $this;
    }

    public function product(int $calculatingString): self
    {
        $this->calculatingString *= $calculatingString;
        return $this;
    }

    public function division(int $calculatingString): self
    {
        if ($calculatingString === 0) {
            $this->calculatingString = 0;
            return $this;
        }
        else {
            $this->calculatingString /= $calculatingString;
            return $this;
        }
    }

    public function getResult(): float
    {
        return $this->calculatingString;
    }
}
$calculator = new Calculator(0);
$calculator->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();