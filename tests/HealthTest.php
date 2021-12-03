<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class HealthTest extends TestCase
{
    public function testAddition(): void
    {
        $this->assertEquals(4, 2+2, 'Incorrect addition');
    }

    public function testSubtraction(): void
    {
        $this->assertEquals(10, 12-2, 'Incorrect subtraction');
    }

    public function testBool(): void
    {
        $value = true;
        $this->assertTrue($value, 'Not so true bool value');
    }
}
