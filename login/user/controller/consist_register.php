<?php

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$conf_pass = $_POST['confirm-pass'] ?? null;

$errors = [];

if( strlen($name) < 2) {
  $errors[] = 'Your name needs at least 2 characters';
}

if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
  $errors[] = 'Invalid e-mail';
} elseif ( has_email($email) ) {
  $errors[] = 'This e-mail is already in use';
}

if ( strlen($password) < 8 ) {
  $errors[] = 'Your password needs at least 2 characters';
} elseif ( $password != $conf_pass ) {
  $errors[] = 'Your password confirmation is wrong';
}