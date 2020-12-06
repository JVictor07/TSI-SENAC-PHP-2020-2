<?php

session_start();

echo 'You are : ' . $_SESSION['name'] . '<br><br>';

$grade = $_GET['grade'];
// $protocol = $_GET['protocol'];

if ( $grade >= 9 ) {
	echo "WE ARE SO HAPPY!!";
} else {
	echo "What could we do for you give us a grade of 10???";
}

// echo "<br><br>Your protocol is $protocol";