<?php

/**
 * SOLID
 * L - Liskov Subscription Principle, LSP
 */

//    $bird = new Bird();
    $bird = new Duck();
//    $bird = new Penguin();

    $birdRun = new BirdRun($bird);
    $birdRun->run();