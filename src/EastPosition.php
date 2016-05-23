<?php

class EastPosition implements Position
{
    private $coordinateX;
    private $coordinateY;

    public function __construct($x, $y)
    {
        $this->coordinateY = $y;
        $this->coordinateX = $x;
    }

    public function getDirection()
    {
        return 'E';
    }

    public function turnLeft()
    {
        return new NorthPosition($this->coordinateX, $this->coordinateY);
    }

    public function turnRight()
    {
        return new SouthPosition($this->coordinateX, $this->coordinateY);
    }

    public function move()
    {
        $this->coordinateX++;
    }

    public function getCoordinateX()
    {
        return $this->coordinateX;
    }

    public function getCoordinateY()
    {
        return $this->coordinateY;
    }

    public function setCoordinateX($coordinateX)
    {
        $this->coordinateX = $coordinateX;
    }

    public function setCoordinateY($coordinateY)
    {
        $this->coordinateY = $coordinateY;
    }
}