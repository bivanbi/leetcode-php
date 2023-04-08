<?php
namespace App;

use PHPUnit\Framework\TestCase;

class StringToIntegerTest extends TestCase
{
    private StringToInteger $instance;

    protected function setUp(): void
    {
        parent::setUp();
        $this->instance = new StringToInteger();
    }

    public function testEcho()
    {
        $this->assertNotNull($this->instance);
    }
}
