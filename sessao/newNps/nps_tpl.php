<?php

session_start();

$_SESSION['name'] = 'João';

?>
<html>
	<head></head>
	<body>
		<center>
			<h3>How likely are you to recommend my company to a colleague or friend?</h3>
			<br><br>
			<form method="post" action="nps.php">
				Unlikely 
				<?php 
				for ( $i = 1 ; $i <= 10 ; $i++ ) {
          echo" <input type='radio' id='nps$i' name='grade' value='$i'>\n
                <label for='nps$i'>$i</label>\n
							";
				}
				?>
				Very likely
				<br>
				<br>
        Explain the reason for your note, please.
        <br>
				<textarea name='explanation' cols="90" rows="5"></textarea>
				<br>
				<br>
				<input type="submit" name="send" value="Send">
			</form>
		</center>
	</body>
</html>