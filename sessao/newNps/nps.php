<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$grade = $_POST['grade'];
$explanation = $_POST['explanation'];

echo "<br><br>Tou gave us the grade $grade for the reason of \"$explanation\"";

$db = new PDO('sqlsrv:Server=localhost\\SQLEXPRESS;Database=aulaphp','','');

$stmt = $db->prepare('INSERT INTO nps 
									      (grade, explanation)
								      VALUES 
									      (:grade, :explanation)');

$stmt->bindParam(':grade', $grade);					
$stmt->bindParam(':explanation', $explanation);	

if ( $stmt->execute() ) {
	echo '<br><br>Search registered with success !';
} else {
	echo '<br><br> :-( Error, try again !';
}

echo '<br><br><a href="./thanks.php?grade=' . $grade . '">Follow</a>';