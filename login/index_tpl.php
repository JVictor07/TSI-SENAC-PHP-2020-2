<html>
	<head>
		<title>My website</title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="index.php">
							<br>
							<?php
							if ( isset($msg) ) echo $msg;
							?>
							<br>
							<br>
							<label for="login">Login</label>
							<input type="text" id="login" name="login">
							<br><br>
							<label for="password">Password</label>
							<input type="password" id="password" name="password">
							<br>
							<a href="user/register.php">Cadastre-se</a>
							<br>
							<input type="submit" name="enter" value="Enter">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>