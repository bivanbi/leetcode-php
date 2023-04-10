<?php

namespace Tests\App\StringToInteger;

use PHPUnit\Framework\TestCase;
use App\StringToInteger\Solution;

class SolutionTest extends TestCase
{
    private Solution $instance;

    protected function setUp(): void
    {
        parent::setUp();
        $this->instance = new Solution();
    }

    public function testAtoi_withEmptyString()
    {
        $this->assertEquals(0, $this->instance->myAtoi(""));
    }

    public function testAtoi_withFirstChar()
    {
        $this->assertEquals(0, $this->instance->myAtoi("words and 987"));
    }

    public function testAtoi_withWhiteSpace()
    {
        $this->assertEquals(123, $this->instance->myAtoi("  123"));
    }

    public function testAtoi_withNegativeNumber()
    {
        $this->assertEquals(-123, $this->instance->myAtoi("-123"));
    }

    public function testAtoi_withLargerThanMaxAllowed()
    {
        $this->assertEquals(2147483647, $this->instance->myAtoi("947364364674743674"));
    }

    public function testAtoi_withSmallerThanMinAllowed()
    {
        $this->assertEquals(-2147483648, $this->instance->myAtoi("-947364364674743674"));
    }

    public function testAtoi_withTextAfterNumber()
    {
        $this->assertEquals(123, $this->instance->myAtoi("123 and word 123"));
    }

    public function testAtoi_withPlusMinusStart()
    {
        $this->assertEquals(0, $this->instance->myAtoi("+-12"));
    }
}
