<?php
    require_once "Car.php";

$audi = new Car();
    $audi->model = "Audi A4";
    $audi->year = 2015;
    $audi->mileage = 10000;
    $audi->color = "Синий";
    $audi->acceleration = "7.0";
    $audi->image = 'image/audi.jpg';

$bmw = new Car();
    $bmw->model = "BMW 320";
    $bmw->year = 2016;
    $bmw->mileage = 12000;
    $bmw->color = "Синий";
    $bmw->acceleration = "7.3";
    $bmw->image ='image/bmw.jpg';

$ford = new Car();
    $ford->model = "Ford Focus";
    $ford->year = 2016;
    $ford->mileage = 9000;
    $ford->color = "Белый";
    $ford->acceleration = "9.5";
    $ford->image = 'image/ford.jpg';

$nisan = new Car();
    $nisan->model = "Nissan Almera";
    $nisan->year = 2010;
    $nisan->mileage = 80000;
    $nisan->color = "Черный";
    $nisan->acceleration = "12.7";
    $nisan->image= 'image/nisan.jpg';

$ferrari = new Car();
    $ferrari->model = "Ferrari FF";
    $ferrari->year = 2015;
    $ferrari->mileage = 2000;
    $ferrari->color = "Черный";
    $ferrari->acceleration = "3.7";
    $ferrari->image = 'image/ferrari.jpg';