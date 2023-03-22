<?php
    class Book extends Product {
        public function __construct() {
        $this->setType(ProductType::BOOK);
      }
    }
?>