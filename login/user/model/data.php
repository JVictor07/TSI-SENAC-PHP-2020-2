<?php

//Faz com que o 
chdir( __DIR__ ); 

require_once '../../db.php';

function listar (): array {
  global $db;

  $r = $db->query('SELECT id, nome, email FROM usuario');
	$reg = $r->fetchAll();

  return is_array($reg) ? $reg : [];
}

function has_email (string $email): bool {
  if ( empty($email) ) return false;
  
  global $db;

  $stmt = $db->prepare('SELECT id from usuario WHERE email === :email');

  $stmt->bindParam(':email', $email);

  $stmt->execute();

  $register = $stmt->fetch();

  return is_numeric($register['id']) ? true : false;
}