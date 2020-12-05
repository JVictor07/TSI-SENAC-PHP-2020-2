<?php

chdir( __DIR__ );

require '../controller/ProdutoController.class.php';

class ProdutoView extends ProdutoController {
  public function __construct( string $nome, string $description, float $price ) {
    parent::__construct( '', '', 0.0 );
  }

  public function showForm(string $msg = null) {
    include 'Product_form.php';  
  }
}