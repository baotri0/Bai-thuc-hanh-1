<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<style type="text/css">
		form {
			
		}

		table, td {
			border: none;
			text-align: center;
			background-color: lightgray;
		}
	</style>

	<?php
		if (!empty($_POST["ten"]))
		{
			$name=$_POST["ten"];
			$chao = "Chào bạn ".$name;
		}
		else {
			$chao = "";
		}
	?>
	<form action="bai2.php" method="post" >
		<table width="271" border="1">
			<tr>
				<td colspan="2"><strong>In lời chào</strong></td>
			</tr>
			<tr>
				<td width="91">Họ tên bạn</td>
				<td width="164">
				<input type="text" name="ten" id="chao3" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<label><?php echo $chao; ?></label></td>
			</tr>
			<tr>
				<td colspan="2" align="center" valign="middle">
					<input type="submit" name="sub" id="sub" value="Xuất" />
				</td>
			</tr>
		</table>
	</form>

</body>
</html>