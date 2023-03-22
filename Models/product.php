<?php
abstract class Product {

    private $sku;
    private $name;
    private $price;
    private $type;
    private $productAttribute;
    
    public function getSKU() {
      return $this->sku;
    }
    
    public function setSKU($sku) {
      $this->sku = $sku;
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function setName($name) {
      $this->name = $name;
    }
    
    public function getPrice() {
      return $this->price;
    }
    
    public function setPrice($price) {
      $this->price = $price;
    }
    
    public function getType() {
      return $this->type;
    }
    
    public function setType($type) {
      $this->type = $type;
    }
    
    public function getProductAttribute() {
      return $this->productAttribute;
    }
    
    public function setProductAttribute($productAttribute) {
      $this->productAttribute = $productAttribute;
    }
  }
?>