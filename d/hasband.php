<?php

/**
 * SOLID
 * D - Dependency Inversion Principle (DIP)
 */

class lowRankingMale
{
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
        // ... eat
    }
}

class averageRankingMale
{
    public function __construct(private Wife $wife){
    }
    public function eat()
    {
        $food = $this->wife->getFood();
        // ... eat
    }
}

class highRankingMale
{
    public function __construct(private FoodProviderInterface $foodProvider){
    }
    public function eat()
    {
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}