<?php
include('car.php');

class XUV extends Car{
    public $color;
    public $mileage;
    public $brand;
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

class Sedan extends Car{
    public $color;
    public $mileage;
    public $brand;
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
echo $carObj->color.': '.$carObj->mileage.':'.$carObj->brand.'<br/>';

$carObj = new Sedan;
$carObj->color = 'blue';
$carObj->mileage = 30;
$carObj->brand = 'sedan';


echo $carObj->color.': '.$carObj->mileage.':'.$carObj->brand.'<br/>';
?>
