<?php

namespace Tests\App\TwoSum;

use App\TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    private Solution $instance;

    protected function setUp(): void
    {
        parent::setUp();
        $this->instance = new Solution();
    }

    public function testCaseOne()
    {
        $this->assertEquals([0,1], $this->instance->twoSum([2,7,11,15], 9));
    }

    public function testCaseTwo()
    {
        $this->assertEquals([1,2], $this->instance->twoSum([3,2,4], 6));
    }

    public function testCaseThree()
    {
        $this->assertEquals([0,1], $this->instance->twoSum([3,3], 6));
    }
}
