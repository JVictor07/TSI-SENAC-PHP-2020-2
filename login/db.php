<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp';

$user = '';
$password = '';

$db = new PDO($dsn, $user, $password);