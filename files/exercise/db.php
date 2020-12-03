<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp';
$user = '';
$password = '';

try {
  $banco = new PDO($db, $user, $password);
  $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $objErro) {
  echo 'SGBD Indisponivel: ' . $objErro->getMessage();
  exit();
}