<?php

class Rover
{
    private $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function reboot()
    {
        $this->position = new NorthPosition(0,0);
    }

    public function getCoordinateX()
    {
        return $this->position->getCoordinateX();
    }

    public function getCoordinateY()
    {
        return $this->position->getCoordinateY();
    }

    public function getDirection()
    {
        return $this->position->getDirection();
    }

    public function turnLeft()
    {
        $this->position = $this->position->turnLeft();
    }

    public function turnRight()
    {
        $this->position = $this->position->turnRight();
    }

    public function move()
    {
        $this->position->move();
    }
}