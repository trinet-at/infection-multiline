<?php declare(strict_types=1);

namespace Trinet\InfectionMultiline;

class Calculator
{
    public function calculateInMultipleLines(float $value): float
    {
        $result = $value
            / 100
            * 100;

        return $result;
    }

    public function calculateInSingleLine(float $value): float
    {
        $result = $value / 100 * 100;

        return $result;
    }
}
