<?php

namespace Rap2hpoutre\UuidRule\tests;

use Rap2hpoutre\UuidRule\UuidRule;
use PHPUnit\Framework\TestCase;

class UuidRuleTest extends TestCase
{
    protected $uuidRule;

    public function setUp()
    {
        $this->uuidRule = new UuidRule();
    }

    public function testCorrectValue()
    {
        $this->assertTrue($this->uuidRule->passes('test', '6ba7b814-9dad-11d1-80b4-00c04fd430c8'));
    }

    public function testNil()
    {
        $this->assertTrue($this->uuidRule->passes('test', '00000000-0000-0000-0000-000000000000'));
    }

    public function testIncorrectValue()
    {
        $this->assertFalse($this->uuidRule->passes('test', 'test'));
    }
}
