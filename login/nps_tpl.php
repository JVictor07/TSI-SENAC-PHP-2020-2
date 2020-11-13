<?php

require 'session.php';

$_SESSION['nome'] = 'Bono';

?>
<html>
	<head></head>
	<body>
		<?php include 'index_menu_tpl.php'; ?>
		<center>
			<h3>How likely are you to recommend my company to a colleague or friend?</h3>
			<br><br>
			<form method="post" action="nps.php">
        Unlikely
				<?php 
				for ( $i = 1 ; $i <= 10 ; $i++ ) {
					echo "	<input type='radio' id='nps$i' name='nota' value='$i'>\n 
							<label for='nps$i'>$i</label>\n 
							";
				}
				?>
				Very likely
				<br>
				<br>
        Explain the reason, please<br>
				<textarea name='explicacao' cols="90" rows="5"></textarea>
				<br>
				<br>
				<input type="submit" name="avaliacao" value="Avaliar">
			</form>
		</center>
	</body>
</html>