<?php
class Calculator {
    public int $calculatingString;

    public function __construct(int $calculatingString)
    {
        $this->calculatingString = $calculatingString;
    }

    public function sum(int $calculatingString) {
        $this->calculatingString += $calculatingString;
        return $this;
    }

    public function minus(int $calculatingString) {
        $this->calculatingString -= $calculatingString;
        return $this;
    }

    public function product(int $calculatingString) {
        $this->calculatingString *= $calculatingString;
        return $this;
    }

    public function division(int $calculatingString) {
        $this->calculatingString /= $calculatingString;
        return $this;
    }
    
    public function getResult(): int {
        return $this->calculatingString;
    }
}
$calculator = new Calculator(0);
$calculator->getResult();
echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();