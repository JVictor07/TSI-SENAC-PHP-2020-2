<?php

chdir( __DIR__ );

require '../model/Produto.class.php';

class Produto extends PDO {
  private $minPrice = 100;

  public function __construct( string $nome, string $description, float $price ) {
    parent::__construct( $nome, $description, $price );
  }

  public function greaterEqualMinPrice(): bool {
    return $this->price >= $this->minPrice;  
  }
}