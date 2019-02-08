<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h2>Welcome <?php echo $isi['User'];?></h2>
	<table>
		<form>
			<tr>
				<td><h1>Data User</h1></td>
			</tr>
			<tr>
				<td>Username </td>
				<td>Password </td>
			</tr>
			<tr>
				<td>
					<?php
						foreach ($list as $user => $value) {
							// foreach ($user as $key) {
								echo $list[$user][$value];
							// }
 							
 						}	
					 ?>
				 </td>
				 <td>
					<?php 
						foreach ($list as $pass) {
 							foreach ($pass as $key) {
 								echo "$key<br>";
 							}
 						}	
					 ?>
				 </td>
			</tr>
		</form>
	</table>
</body>
</html>