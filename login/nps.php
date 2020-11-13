<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'session.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';


$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br><br>Your note is $nota for the reason \"$explicacao\"";

$db = new PDO(	'sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp', '', '');

$stmt = $db->prepare('	INSERT INTO nps 
									( nota, explicacao)
								VALUES 
									( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo '<br><br>Success!';

} else {

	echo '<br><br> :-( Error, try again! ';
}

echo '<br><br><a href="./thanks.php?nota=' . $nota . '">Continue</a>';

include 'footer_tpl.php';