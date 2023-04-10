<?php

namespace App\AddTwoNumbers;

class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $carry = 0;
        $result = $previousDigit = new ListNode();
        while ($l1 instanceof ListNode || $l2 instanceof ListNode || $carry === 1) {
            $number1 = $l1->val ?? 0;
            $number2 = $l2->val ?? 0;
            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;

            $sum = $number1 + $number2 + $carry;
            $digit = new ListNode($sum % 10);
            $carry = intdiv($sum, 10);

            $previousDigit->next = $digit;
            $previousDigit = $digit;
        }

        return $result->next;
    }
}
