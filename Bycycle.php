<?php

class Bycycle extends Transport
{
    public string $typeOfBrake;
    public string $precenceOfHighlights;

    public function __construct($speed, $price, $weight, $typeOfBrake, $precenceOfHighlights)
    {
        parent::__construct($speed, $price, $weight);
        $this->typeOfBrake = $typeOfBrake;
        $this->precenceOfHighlights = $precenceOfHighlights;
    }

    function movement(): string
    {
        return "Велосипед: <br> Скорость: $this->price км/ч <br> Вес: $this->weight кг <br> Цена: $this->price рублей
        <br> Тип тормозов: $this->typeOfBrake <br> Наличие фар: $this->precenceOfHighlights <br>";
    }
}