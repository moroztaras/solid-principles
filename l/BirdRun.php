<?php

class BirdRun
{
    private int $flySpeed;

    public function __construct(private Bird $bird) {

    }

    public function run() {
        $this->flySpeed = $this->bird->getFlySpeed();
    }
}