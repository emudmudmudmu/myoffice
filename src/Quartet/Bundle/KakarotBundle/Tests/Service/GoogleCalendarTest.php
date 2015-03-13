<?php

namespace Quartet\Bundle\KakarotBundle\Tests\Service;

use Doctrine\ORM\EntityManager;
use Quartet\Bundle\KakarotBundle\Service\GoogleCalendar;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GoogleCalendarTest extends WebTestCase
{
    private $em;

    protected function setup()
    {
        $kernel = static::createKernel();
        $kernel->boot();

        $this->em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
    }

    public function testGetYearGoogleCalendar()
    {
        $googleCalendar = new GoogleCalendar($this->em);
        $results = $googleCalendar->getYearGoogleCalendar(date('Y'));

        $this->assertEquals(17, count($results));
    }

    /**
     * @expectedException LogicException
     */
    public function testGetYearGoogleCalendarNull()
    {
        $googleCalendar = new GoogleCalendar($this->em);
        $googleCalendar->getYearGoogleCalendar(null);
    }
}
