<?php

/**
 * SOLID
 * S - Single responsibility principle
 */

    $logger = new Logger();
    $product = new Product($logger);
    $product->setPrice(10);