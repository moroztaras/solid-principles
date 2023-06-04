<?php

class Wife implements FoodProviderInterface
{
    private $food;

    public function getFood() {
        return $this->food;
    }
}