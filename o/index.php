<?php

/**
 * SOLID
 * O - Open/closed principle
 */

    $logger = new FileLogger(); // DbLogger or FileLogger
    $product = new Product($logger);
    $product->setPrice(10);