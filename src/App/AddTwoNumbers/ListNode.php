<?php

namespace App\AddTwoNumbers;

class ListNode
{
     public mixed $val = 0;
     public ListNode|null $next = null;
     function __construct($val = 0, $next = null) {
         $this->val = $val;
         $this->next = $next;
     }

     public static function withInteger(int $number): ListNode {
         $asString = (string) $number;
         $nextNumber = null;

         foreach (str_split($asString) as $digit) {
            $nextNumber = new ListNode($digit, $nextNumber);
         }

         return $nextNumber;
     }
}
