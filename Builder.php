<?php
class Builder{

  private $color;
  private $mileage;
  private $brand;

  public function showColor($color){
   $this->color=$color;
 }
 public function showMileage($mileage){
   $this->mileage=$mileage;
 }
 public function showBrand($brand){
   $this->brand=$brand;
 }
 public function showResult(){
  echo "\n Color:".$this->color."\n Mileage:".$this->mileage."\n Brand:".$this->brand;
}
}
?>
