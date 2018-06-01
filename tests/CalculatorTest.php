<?php declare(strict_types=1);

namespace TrinetTest\InfectionMultiline;

use PHPUnit\Framework\TestCase;
use Trinet\InfectionMultiline\Calculator;

class CalculatorTest extends TestCase
{
    /** @var Calculator */
    private $calculator;

    public function setUp()
    {
        parent::setUp();
        $this->calculator =  new Calculator();
    }

    public function testCalculateInMultipleLines(): void
    {
        $result = $this->calculator->calculateInMultipleLines(110);

        $this->assertSame(110., $result);
    }

    public function testCalculateInSingleLine(): void
    {
        $result = $this->calculator->calculateInSingleLine(110);

        $this->assertSame(110., $result);
    }

    public function testCalculateInMultipleLinesFloat(): void
    {
        $result = $this->calculator->calculateInMultipleLines(10.5);

        $this->assertSame(10.5, $result);
    }

    public function testCalculateInSingleLineFloat(): void
    {
        $result = $this->calculator->calculateInMultipleLines(10.5);

        $this->assertSame(10.5, $result);
    }

}
