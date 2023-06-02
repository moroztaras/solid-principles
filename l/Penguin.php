<?php

/**
 * Child of a class Bird.
 * This class change behavior.
 */

class Penguin extends Bird
{
    private int $swimSpeed = 4;

    public function getFlySpeed():int
    {
       // Not typical behavior of the returned value
       return 'I can\'t fly'; //
    }

    public function getSwimSpeed():int
    {
        return $this->swimSpeed;
    }
}