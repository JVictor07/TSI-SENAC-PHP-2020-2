<?php

require 'model/data.php'

if ( isset($_POST['enter']) ) {
  $dir_images = '../view/images/';

  if ( !is_dir('../view/images/') ) {
    mkdir( $dir_images );
  }

  require 'controller/consist_register.php';

  $id = register_user($_POST['name'], $_POST['email'], $_POST['password']);

  if ( $id ) {

    if ( isset( $_FILES['photo'] ) ) {

      if ( $_FILES['photo']['error'] == 0) {
        $exploded_name = explode('.', $_FILES['photo']['name']);
        $ext = end($exploded_name);
        $image_name = 'photo_' . md5(rand(-9999999,9999999)) . '_' . $id . '.' . $ext;

        $temp_file = $_FILES['photo']['tmp_name'];
        $destiny = $dir_images . $image_name;

        move_uploaded_file($temp_file, $destiny);

        link_img_to_user( $id, $image_name );
      }
    }

    session_start();

    $_SESSION['login'] = $_POST['email'];
    $_SESSION['id'] = $id;

    header('Location: ../');

  } else {

    $errors = ['Não foi possível criar o usuário']
  }
} else {

  $errors = [];
}

include 'view/register_tpl.php';