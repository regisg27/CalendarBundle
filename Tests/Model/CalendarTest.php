<?php

namespace Bundle\CalendarBundle\Tests\Model;

use Bundle\CalendarBundle\Model\Calendar as AbstractCalendar;

class Calendar extends AbstractCalendar
{
}

class CalendarTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $calendar = new Calendar();
        
        $this->assertNull($calendar->getName());

        $calendar->setName('Home');
        $this->assertEquals('Home', $calendar->getName());
    }
}