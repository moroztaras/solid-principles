<?php

class FileLogger implements LoggerInterface
{
    public function log($message) {
        //...
        $this->saveToFile($message);
    }

    private function saveToFile($message) {
        //
    }
}