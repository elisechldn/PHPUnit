<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 3;
        $expectedResult = 15;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);

        //Assert
        $this->assertSame($expectedResult, $multiplication,
            "La méthode multiplication a échoué"
        );
    }

    public function testIsEven(): void
    {
        //Arrange
        $firstValue = 2;
        $expectedResult = true;

        //Act
        $calculator = new Calculator();
        $modulo = $calculator->isEven($firstValue);

        //Assert
        $this->assertTrue($expectedResult === $modulo,
            "Le chiffre n'est pas pair"
        );
    }
}