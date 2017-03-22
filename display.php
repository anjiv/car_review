<?php
include('car.php');

class XUV extends Car{
    private $color;
    private $mileage;
    private $brand;
    public function setColor($color){
      $this->color=$color;
    }

    public function setMileage($mileage){
      $this->mileage = $Mileage;
    }

    public function setBrand($brand){
      $this->brand = $Brand;
    }
}

$carObj = new XUV;
$carObj->color = 'red';
$carObj->mileage = 20;
$carObj->brand = 'xuv';


echo $carObj->color.': '.$carObj->mileage.':'.$carObj->brand.'<br />';
?>
