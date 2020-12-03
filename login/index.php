<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';
require_once 'user/model/data.php';

if ( isset($_SESSION['login']) ) {

		$photo_array = get_user_image( $_SESSION['id'] );

		$photo = $photo_array[0]['foto'];

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset( $_POST['enter'] ) ) {

	$login = filter_var( $_POST['login'], FILTER_SANITIZE_EMAIL);
	$password = $_POST['password'];

	$r = $db->query("SELECT password, id FROM usuario WHERE email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['password'];

	if ( password_verify( $password, $hash) ) {

		$_SESSION['login'] = $login;
		$_SESSION['id'] = $reg['id'];

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

	} else {

		$msg = 'Invalids credentials, try again';

		include 'index_tpl.php';		
	}

} else {

	include 'index_tpl.php';
}