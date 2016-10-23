	<td valign="top" class="tdmain">
	<style type="text/css">
	#content{
		width: 640px;
	}
	</style>
	<?php
	$id = $_GET['id'];
	$str = "SELECT * FROM tbl_inf WHERE id = $id";	
	$result = mysql_query($str);
	$d = 0;
	
	?>
<table style="border: 1px #545d2e solid;" width="610px">
	<tr>
		<?php
		while($rows = mysql_fetch_array($result)){
		$d = $d + 1;
		?>
		<td>
			<table border="0" width="610px" style="padding:10px">
				<tr>
					<td colspan="2" height="30px" style=" background: #6e7846;">
						<center><font style="font-size:18px; color:#000"> Trang Thông Tin Cá Nhân</font></center>
					</td>
				</tr>
				<tr>
					<td width="300" style="padding:5px; border:1px #545d2e solid;">
						<img src="<?php echo $rows['photo'];?>" width="300" height="400"/>
					</td>
					<td valign="top" style="padding-left:10px; padding-top:10px;" >
						<font style="  color: #eb4113; font-weight: bold; font-size: 24px;">
						<?php echo $rows['name']; ?><br />	<br />	
						</font>
						<font style="  color: #3e92e8; font-weight: bold; font-size: 16px;">
						<?php echo $rows['sumary']; ?>
						</font>
					</td>	
				</tr>
				<tr>
					<td colspan="2">
						<div id="bot_ct">
							<?php echo $rows['detail']; ?>
						</div>
					</td>
				<tr>
			</table>
			<br />

		</td>
		<?php
		}
		?>
	</tr>
</table>
	
	</td>