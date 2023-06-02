<?php

class DbLogger implements LoggerInterface
{
    public function log($message) {
        //...
        $this->saveToDb($message);
    }

    private function saveToDb($message) {
        //
    }
}