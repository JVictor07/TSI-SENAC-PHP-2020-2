<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Produto extends PDO {
  protected $nome;
  protected $price;
  protected $description;

  public function __construct( string $nome, string $description, float $price ) {
    $this->nome = $nome;
    $this->price = $price;
    $this->description = $description;

    parent::__construct(
      'sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp',
      '', 
      ''
    );
  }

  public function setName(string $name): bool {
    return $this->name = $name;
  }

  public function setPrice(string $price): bool {
    return $this->price = $price;
  }

  public function setDescription(string $description): bool {
    return $this->description = $description;
  }

  public function register(): bool {
    $stmt = $this->prepare('INSERT INTO produtos
                              (name, description, price)
                            VALUES
                              (:name, :description, :price)');

    $stmt->bindParam( ':name', $this->name );
    $stmt->bindParam( ':price', $this->price );
    $stmt->bindParam( ':description', $this->description );

    return $stmt->execute();
  }
}