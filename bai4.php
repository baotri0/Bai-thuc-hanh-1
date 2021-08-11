<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php  
		if (isset($_POST['so_dau'])&&isset($_POST['so_cuoi'])) {
			if (is_numeric($_POST['so_dau'])&&is_numeric($_POST['so_cuoi'])) {
				$x = $_POST['so_dau']; 
				$y = $_POST['so_cuoi'];
				if ($x>$y) {
					$tong="Không hợp lệ! Hãy nhập số kết thúc lớn hơn số bắt đầu.";
					$tich="Không hợp lệ! Hãy nhập số kết thúc lớn hơn số bắt đầu.";
					$tong_chan="Không hợp lệ! Hãy nhập số kết thúc lớn hơn số bắt đầu.";
					$tong_le="Không hợp lệ! Hãy nhập số kết thúc lớn hơn số bắt đầu.";
				} else {
					$tong = 0;
					$tich = 1;
					$tong_chan = 0;
					$tong_le = 0;
					for ($i= $x; $i <= $y ; $i++) { 
						$tong = $tong + $i;
						$tich = $tich * $i;
						if ($i%2==0) {
							$tong_chan = $tong_chan + $i;
						}
						else {
							$tong_le = $tong_le + $i;
						}
					}
				}
				
			} else {
				$tong="Không hợp lệ!";
				$tich="Không hợp lệ!";
				$tong_chan="Không hợp lệ!";
				$tong_le="Không hợp lệ!";
			}

		} else {
			$tong="";
			$tich="";
			$tong_chan="";
			$tong_le="";
		}
		
	?>



	<form action="bai4.php" method="post" >
		<table width="728" border="1">
			<tr>
				<td width="122">&nbsp;</td>
				<td width="76">Số bắt đầu</td>
				<td width="169"><label for="textfield"></label>
				<input type="text" name="so_dau" id="textfield" value="" placeholder="Nhập số bắt đầu" /></td>
				<td width="152">Số kết thúc</td>
				<td width="175"><label for="textfield2"></label>
				<input type="text" name="so_cuoi" id="textfield2" value="" placeholder="Nhập số kết thúc"/></td>
			</tr>
			<tr>
				<th colspan="5">Kết quả
				<label for="textfield3"></label></th>
			</tr>
			<tr>
				<td>Tổng các số</td>
				<td colspan="4"><label for="textfield4"></label>
				<input type="text" name="tong" id="textfield4" value="<?php echo $tong ?>" disabled="disable" style="width: 99%;" /></td>
			</tr>
			<tr>
				<td>Tích các số</td>
				<td colspan="4"><label for="textfield5"></label>
				<input type="text" name="tich" id="textfield5" value="<?php echo $tich ?>" disabled="disable" style="width: 99%;"/></td>
			</tr>
			<tr>
				<td>Tổng các số chẵn</td>
				<td colspan="4"><label for="textfield6"></label>
				<input type="text" name="tong_chan" id="textfield6" value="<?php echo $tong_chan ?>" disabled="disable" style="width: 99%;"/></td>
			</tr>
			<tr>
				<td>Tổng các số lẻ</td>
				<td colspan="4"><label for="textfield7"></label>
				<input type="text" name="tong_le" id="textfield7" value="<?php echo $tong_le ?>" disabled="disable" style="width: 99%;"/></td>
			</tr>
			<tr>
				<th colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></th>
			</tr>
		</table>
	</form>
</body>
</html>
