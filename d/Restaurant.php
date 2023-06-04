<?php

class Restaurant implements FoodProviderInterface
{
    private $food;

    public function getFood() {
        return $this->food;
    }
}