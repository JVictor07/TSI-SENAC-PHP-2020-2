<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

chdir( __DIR__ );

require '../session.php';

require '/model/data.php';

if ( isset($_GET['delete']) ) {

  if ( !delete_user( $_GET['delete'] ) ) {
    $error = 'Erro ao tentar apagar o usuário!';
  }
}

if ( isset($_POST['register']) ) {
  
  require 'controller/consist_register.php';

  if ( count($errors) == 0 ) {
    if ( !edit_users( $_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']) ) {
      $errors = ['Erro ao tentar editar o usuário!'];
    } else {
      $edited_ok = true;
    }
  }
  
  require '../header_tpl.php';
  require '../index_menu_tpl.php';
  require 'view/edit.php';
  require '../footer_tpl.php';
  
  exit();	
}

  if ( isset($_GET['edit']) ) {
  
  $user = listar($_GET['edit']);
  
  $nome = $user[0]['nome'] ?? '';
  $email = $usuario[0]['email'] ?? '';	
  
  require '../header_tpl.php';
  require '../index_menu_tpl.php';
  require 'view/edit.php';
  require '../footer_tpl.php';
  
  exit();
}

$lista = listar();

require 'view/lista.php';