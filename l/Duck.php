<?php

/**
 * Child of a class Bird.
 * This class don't change behavior.
 */
class Duck extends Bird
{
    private int $flySpeed = 8;
    private int $swimSpeed = 2;

    public function getFlySpeed():int
    {
       return $this->flySpeed;
    }

    public function getSwimSpeed():int
    {
        return $this->swimSpeed;
    }
}