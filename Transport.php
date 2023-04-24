<?php

abstract class Transport
{
    protected int $speed;
    protected int $price;
    protected int $weight;

    public function __construct($speed, $price, $weight)
    {
        $this->speed = $speed;
        $this->price = $price;
        $this->weight = $weight;
    }

    abstract function movement();
}