<?php

require 'view/ProdutoView.class.php';

class Init {
  private $objView;

  public function __construct( string $nome, string $description, float $price ) {
    $this->objView = new ProdutoView;

    if ( !isset( $_POST['register'] ) ){
      $this->objView->exibeForm();
    } else {
      $this->objView->setName($_POST['name']);
      $this->objView->setPrice($_POST['price']);
      $this->objView->setDescription($_POST['description']);

      if ( $this->objView->greaterEqualMinPrice() ){
        $this->objView->register();

        $this->objView->showForm('Registered with success !');
      } else {
        $this->objView->showForm('Price lower than the minimum !');
      } 
    } 
  }

}

new Init;