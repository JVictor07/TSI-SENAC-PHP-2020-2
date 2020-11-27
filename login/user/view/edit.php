<center>
	<br><br><h1>EDIT USER</h1><br><br>
	<table border="1">
		<tr>
			<td>
				<form method="post">
					<br>
					<?php
					if ( isset($edited_ok) ) {
						echo "<font color='green'>Edited with success!</font>";
					}
					?>
					<font color="red">
					<?php
					if ( isset($errors) ){
						if ( count($errors) > 0 ) {

							foreach ($errors as $error) {
								echo $error . '<br>';
							}
						}
					}
					?>
					</font>
					<br>
					<br>
					<label for="name">Name</label>
					<input type="text" id="name" name="name" 
							value="<?php echo $nome; ?>" required>
					<br><br>
					<label for="email">E-mail</label>
					<input type="text" id="email" name="email"
							value="<?php echo $email; ?>" required>
					<br><br>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" value="****" required>
					<br>
					<br>
					<label for="conf_password">Confirm your password</label>
					<input type="password" id="conf_password" name="conf_password" value="****" required>
					<br><br>
					<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
					<input type="submit" name="register" value="Register">
				</form>	
			</td>
		</tr>
	</table>
</center>