<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;

    protected function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenNoNumbersReturnsZero(): void
    {
        $this->assertEquals(0, $this->stringCalculator->Add(''));
    }

    /**
     * @test
     */
    public function givenNumberReturnsTheNumber(): void
    {
        $this->assertEquals(5, $this->stringCalculator->Add('5'));
    }

    /**
     * @test
     */
    public function givenNumbersReturnsItsAddition(): void
    {
        $this->assertEquals(6, $this->stringCalculator->Add('1,2,3'));
    }


}