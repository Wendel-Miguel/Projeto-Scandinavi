<?php
    class Furniture extends Product {
        public function __construct() {
            $this->setType(ProductType::FURNITURE);
        }
    }
?>