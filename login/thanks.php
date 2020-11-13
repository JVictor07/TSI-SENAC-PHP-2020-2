<?php

session_start();

echo 'Hello' . $_SESSION['nome'] . '<br><br>';

$nota = $_GET['nota'];
$protocolo = $_GET['protocolo'];

if ( $nota >= 9 ) {

	echo "Congratulations !!";

} else {

	echo "Why can I do for have the grade 10???";
}

echo "<br><br>Your protocol is $protocolo";