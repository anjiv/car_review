<?php
class Car{

    public $color;
    public $mileage;
    public $brand;

    public function __construct(){
       echo 'About this Car.<br />';
    }

    public function showColor(){
       echo 'car color $'.$this->color.'.<br />';
    }

    public function showMileage(){
       echo 'This car has '.$this->mileage.'.<br />';
    }
    public function showBrand(){
       echo 'This car is of '.$this->brand.'.<br />';
    }
}
?>
