<?php

class SuperTransformer implements CarTransformerInterface, PlaneTransformerInterface, ShipTransformerInterface
{
    public function toCar()
    {
        echo 'Transform to car';
    }

    public function toPlane()
    {
        echo 'Transform to plane';
    }

    public function toShip()
    {
        echo 'Transform to ship';
    }
}