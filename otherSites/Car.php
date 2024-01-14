<?php

class Car
{
    public $id;
    public $name;
    public $text;
    public $topSpeed;
    public $engCapacity;
    public $engPower;
    public $tranType;
    public $tranAmount;
    public $pictureLink;
    public $price;
    public function __construct($id,$name,$text,$topSpeed,$engCapacity,$engPower,$tranType,$tranAmount,$pictureLink,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->text = $text;
        $this->topSpeed = $topSpeed;
        $this->engCapacity = $engCapacity;
        $this->engPower = $engPower;
        $this->tranType = $tranType;
        $this->tranAmount = $tranAmount;
        $this->pictureLink = $pictureLink;
        $this->price = $price;
    }
}