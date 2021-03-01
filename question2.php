<?php
use question1;
use PHPUnit\Framework\TestCase;

class timeTest extends TestCase
{
    protected $time;

    public function setUp()
    {
        $this->time = new question1();
    }

    public function testIsTime()
    {
        $this->time->getGreeting();
        $result = $this->time->getGreeting();
        $this->assertEquals('currenttime:', $result);

    }
}