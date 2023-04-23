<?php

class Car extends Transport
{
    public string $brand;
    public int $yearOfIssue;


    public function __construct($speed, $price, $weight, $brand, $yearOfIssue)
    {
        parent::__construct($speed, $price, $weight);
        $this->brand = $brand;
        $this->yearOfIssue = $yearOfIssue;
    }

    function movement(): string
    {
        return "Машина: <br> Скорость: $this->price км/ч <br> Вес: $this->weight кг <br> Цена: $this->price рублей 
        <br> Модель: $this->brand <br> Год выпуска: $this->yearOfIssue <br>";
    }
}