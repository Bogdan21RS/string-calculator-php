<?php

namespace Deg540\StringCalculatorPHP;

use function PHPUnit\Framework\isEmpty;

class StringCalculator
{
    public function add(String $numbers): int
    {
        if (str_contains($numbers, ',')) {
            $explodedNumbers = explode(',', $numbers);
            return array_sum($explodedNumbers);
        }

        if (empty($numbers)) {
            return 0;
        }

        return $numbers;
    }
}