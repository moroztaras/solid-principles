<?php

class Product {

    public function __construct(private LoggerInterface $logger)
    {
    }

    public function setPrice($price) {
        try {
            // save price in db
        }catch (DbExeption $e) {
            $this->logger->log($e->getMessage());
        }
    }

}