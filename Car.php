<?php

class Car{
    public $model;
    public $year;
    public $mileage;
    public $color;
    public $acceleration;
    public $image;

    public function getInfo()
    {
        echo "Модель $this->model<br/>";
        echo "Год выпуска $this->year<br/>";
        echo "Пробег $this->mileage<br/>";
        echo "Цвет $this->color<br/>";
        echo "Разгон 0-100 $this->acceleration<br/>";
    }

    public function getImage()
    {
        echo "<img src='$this->image' width='200' height='170'><br/>";
    }
}