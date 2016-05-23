<?php

class RoverTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Rover
     */
    private $rover;

    public function setUp()
    {
        $this->rover = new Rover(new NorthPosition(0,0));
    }

    public function testGetAllInfoInitial()
    {
        $this->assertEquals(0,$this->rover->getCoordinateX(),'Error coordinate X');
        $this->assertEquals(0,$this->rover->getCoordinateY(),'Error coordinate Y');
        $this->assertEquals('N',$this->rover->getDirection(),'Error direction');
    }

    public function testTurnLeftFromInitialPosition()
    {
        $this->rover->turnLeft();
        $this->assertEquals('W',$this->rover->getDirection(),'The direction should be W');
        $this->rover->turnLeft();
        $this->assertEquals('S',$this->rover->getDirection(),'The direction should be S');
        $this->rover->turnLeft();
        $this->assertEquals('E',$this->rover->getDirection(),'The direction should be E');
        $this->rover->turnLeft();
        $this->assertEquals('N',$this->rover->getDirection(),'The direction should be N');
    }

    public function testTurnRightFromInitialPosition()
    {

        $this->rover->turnRight();
        $this->assertEquals('E',$this->rover->getDirection(),'The direction should be E');
        $this->rover->turnRight();
        $this->assertEquals('S',$this->rover->getDirection(),'The direction should be S');
        $this->rover->turnRight();
        $this->assertEquals('W',$this->rover->getDirection(),'The direction should be W');
        $this->rover->turnRight();
        $this->assertEquals('N',$this->rover->getDirection(),'The direction should be N');
    }

    public function testRebootRover()
    {
        $this->rover->move();
        $this->assertEquals(1,$this->rover->getCoordinateY(),'The coordinate Y should be 1');
        $this->rover->reboot();
        $this->assertEquals(0,$this->rover->getCoordinateX(),'Error coordinate X');
        $this->assertEquals(0,$this->rover->getCoordinateY(),'Error coordinate Y');
        $this->assertEquals('N',$this->rover->getDirection(),'Error direction');
    }

    public function testMoveRoverOnePositionFromInitialPositionToAllDirections()
    {
        $this->rover->move();
        $this->assertEquals(1,$this->rover->getCoordinateY(),'The coordinate Y should be 1');
        $this->rover->move();
        $this->assertEquals(2,$this->rover->getCoordinateY(),'The coordinate Y should be 2');

        $this->rover->turnRight();
        $this->rover->move();
        $this->assertEquals(1,$this->rover->getCoordinateX(),'The coordinate X should be 1');
        $this->rover->move();
        $this->assertEquals(2,$this->rover->getCoordinateX(),'The coordinate X should be 2');

        $this->rover->turnRight();
        $this->rover->move();
        $this->assertEquals(1,$this->rover->getCoordinateY(),'The coordinate Y should be 1 (down)');
        $this->rover->move();
        $this->assertEquals(0,$this->rover->getCoordinateY(),'The coordinate Y should be 0 (down)');
    }

}
