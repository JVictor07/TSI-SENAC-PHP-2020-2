<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp';

$user = '';
$password = '';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

$r = $db->query($sql)

echo '<prev>'

while ($reg = $r->fetch(PDO::FETCH_ASSOC)) {
	echo "Sr(a) {$reg['nome']}, seu telefone {$reg['telefone']} será bloqueado se a conta
				não for paga" 
}

foreach ( $db->query($sql) as $registro ) {

	echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}<br>\n";
}