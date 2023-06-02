<?php

// Basic class
class Bird
{
    private int $flySpeed = 10;

    public function getFlySpeed():int
    {
       return $this->flySpeed;
    }
}