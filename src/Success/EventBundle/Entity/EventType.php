<?php

namespace Success\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EventType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Success\EventBundle\Entity\EventTypeRepository")
 */
class EventType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
    /**
     * @ORM\OneToMany(targetEntity="Success\EventBundle\Entity\BaseEvent", mappedBy="eventType")
     */
    private $events;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EventType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    /**
     * Add events
     *
     * @param \Success\EventBundle\Entity\BaseEvent $events
     * @return EventType
     */
    public function addEvent(\Success\EventBundle\Entity\BaseEvent $events)
    {
        $this->events[] = $events;

        return $this;
    }

    /**
     * Remove events
     *
     * @param \Success\EventBundle\Entity\BaseEvent $events
     */
    public function removeEvent(\Success\EventBundle\Entity\BaseEvent $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    public function __toString(){
        return $this -> name;
    }
}
