<?php

namespace Tests\App\AddTwoNumbers;

use App\AddTwoNumbers\ListNode;
use PHPUnit\Framework\TestCase;

class ListNodeTest extends TestCase
{
    public function testWithInteger_WithZero()
    {
        $listNode = ListNode::withInteger(0);
        self::assertEquals(0, $listNode->val);
        self::assertNull($listNode->next);
    }

    public function testWithInteger_withOneDigit() {
        $listNode = ListNode::withInteger(9);
        self::assertEquals(9, $listNode->val);
        self::assertNull($listNode->next);
    }

    public function testWithInteger_withTwoDigits() {
        $listNode = ListNode::withInteger(19);
        self::assertEquals(9, $listNode->val);
        self::assertNotNull($listNode->next);

        $listNode = $listNode->next;
        self::assertEquals(1, $listNode->val);
        self::assertNull($listNode->next);
    }

    public function testWithInteger_withThreeDigits() {
        $listNode = ListNode::withInteger(193);
        self::assertEquals(3, $listNode->val);
        self::assertNotNull($listNode->next);

        $listNode = $listNode->next;
        self::assertEquals(9, $listNode->val);
        self::assertNotNull($listNode->next);

        $listNode = $listNode->next;
        self::assertEquals(1, $listNode->val);
        self::assertNull($listNode->next);
    }
}
