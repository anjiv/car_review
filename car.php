<?php
class Car{

    public $color;
    public $mileage;
    public $brand;

    public function __construct(){
       echo 'About this Car.';
    }

    public function showColor(){
       echo 'car color'.$this->color.'.';
    }

    public function showMileage(){
       echo 'This car has '.$this->mileage.'.';
    }
    public function showBrand(){
       echo 'This car is of '.$this->brand.'.';
    }
}
?>
