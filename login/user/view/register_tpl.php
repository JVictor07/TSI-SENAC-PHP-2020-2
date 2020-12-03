<html>
	<head>
		<title>My website</title>
	</head>
	<body>
		<center>
      <br><br><h1>Create your account</h1><br><br>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="register.php" enctype='multipart/form-data'>
							<br>
							<?php
								if ( count($errors) > 0 ) {
									foreach ($errors as $error) {
										echo $error . '<br>';
									}
								}
							?>
							<br>
							<br>

							<label for="name">Name</label>
							<input required type="text" id="name" name="name">
              <br><br>

							<label for="email">Email</label>
							<input required type="email" id="email" name="email">
							<br><br>

              <label for="password">Password</label>
							<input required type="password" id="password" name="password">
							<br><br>

              <label for="confirm-pass">Confirm your password</label>
							<input required type="password" id="confirm-pass" name="confirm-pass">
							<br><br>

							<label for="photo">Add your photo</label>
							<input required type="file" id="photo" name="photo">
							<br><br>

							<a href="user/register.php">Register</a>
							<br>
							<input required type="submit" name="enter" value="Enter">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>