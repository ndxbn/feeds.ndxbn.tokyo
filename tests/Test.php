<?php

namespace Tests;

use Ndxbn\EchoBack;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testPass(): void
    {
        self::assertTrue(true);
    }

    public function testP(): void {
        $res = EchoBack::p("foobar");
        self::assertSame("foobar", $res);
    }
}
