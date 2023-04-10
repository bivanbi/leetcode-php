<?php

namespace Tests\App\AddTwoNumbers;

use App\AddTwoNumbers\ListNode;
use App\AddTwoNumbers\Solution;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;

class SolutionTest extends TestCase
{
    private Solution $instance;

    protected function setUp(): void
    {
        parent::setUp();
        $this->instance = new Solution();
    }

    public function testAddTwoNumbers_withEvenLengthInput()
    {
        $this->assertExpectedResult(342, 465);
    }

    public function testAddTwoNumbers_withUnevenLengthInput()
    {
        $this->assertExpectedResult(9999999, 9999);
    }

    private function assertExpectedResult(int $number1, int $number2) {
        $list1 = ListNode::withInteger($number1);
        $list2 = ListNode::withInteger($number2);
        $sum = $number1 + $number2;
        $expected = ListNode::withInteger($sum);

        $actual = $this->instance->addTwoNumbers($list1, $list2);

        $place = 0;
        while ($expected instanceof ListNode) {
            assertNotNull($actual, "number1: $number1, number2: $number2, sum: $sum: should not be null at place $place");
            assertEquals($expected->val, $actual->val, "number1: $number1, number2: $number2, sum: $sum: Values differ at place $place");
            $expected = $expected->next;
            $actual = $actual->next;
            $place++;
        }
        self::assertNull($actual, "number1: $number1, number2: $number2, sum: $sum: actual has more nodes than expected");
    }
}
