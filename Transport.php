<?php

abstract class Transport
{
    public int $speed;
    public int $price;
    public int $weight;

    public function __construct($speed, $price, $weight)
    {
        $this->speed = $speed;
        $this->price = $price;
        $this->weight = $weight;
    }

    abstract function movement();
}