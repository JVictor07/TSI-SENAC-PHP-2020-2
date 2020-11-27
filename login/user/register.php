<?php

require 'model/data.php'

if ( isset($_POST['cadastrar']) ) {
  require 'controller/consist_register.php';

  $id = register_user($_POST['name'], $_POST['email'], $_POST['password']);

  if ( $id ) {

    session_start();

    $_SESSION['login'] = $_POST['email'];

    header('Location: ../');

  } else {

    $errors = ['Não foi possível criar o usuário']
  }
} else {

  $errors = [];
}

include 'view/register_tpl.php';