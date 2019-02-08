<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>
			<table>
				<form action="<?php echo base_url('index.php/Praktikum1/Home')?>" method="post">
					<tr>
						<td colspan="3">Log-in Page</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" required=""></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" required=""></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" name="submit" value="Log-in"></td>
					</tr>
				</form>
			</table>
		</center>
	</body>
</html>
