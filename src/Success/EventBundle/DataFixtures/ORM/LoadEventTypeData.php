<?php
namespace Success\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Success\EventBundle\Entity\EventType;


class LoadEventTypeData extends AbstractFixture implements OrderedFixtureInterface {
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $newEvent1 = new EventType();        
        $newEvent1 -> setName("вводный вебинар");
        $manager->persist($newEvent1);

        $newEvent2 = new EventType();        
        $newEvent2 -> setName("стартовый тренинг");
        $manager->persist($newEvent2);
        
        $manager->flush();
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }    
}
