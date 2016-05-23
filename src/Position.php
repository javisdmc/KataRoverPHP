<?php

interface Position
{
    public function getCoordinateX();
    public function getCoordinateY();
    public function setCoordinateX($coordinate);
    public function setCoordinateY($coordinate);
    public function getDirection();
    public function turnLeft();
    public function turnRight();
    public function move();
}