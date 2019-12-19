<?php

namespace Psr\EventDispatcher\Test\Unit;

use PHPUnit\Framework\MockObject\MockObject;
use Psr\EventDispatcher\EventDispatcherInterface as TestSubject;
use PHPUnit\Framework\TestCase;

class EventDispatcherInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @return TestSubject|MockObject
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(TestSubject::class)
            ->getMock();

        return $mock;
    }

    /**
     * Tests whether an instance of the test subject can be created.
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();
        $this->assertInstanceOf(TestSubject::class, $subject);
    }
}
