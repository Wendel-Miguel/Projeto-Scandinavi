<?php
class DVD extends Product {
    public function __construct() {
    $this->setType(ProductType::DVD);
  }
}
?>