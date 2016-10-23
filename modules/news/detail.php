	<td valign="top" class="tdmain">
	<style type="text/css">
	#content{
		width: 640px;
	}
	</style>
	<?php
	$id = $_GET['id'];
	$str = "SELECT * FROM tbl_news WHERE id = $id";	
	$result = mysql_query($str);
	$d = 0;
	?>
<table style="border: 1px #C7C7C7 solid;" width="400">
	<tr>
		<?php
		while($rows = mysql_fetch_array($result)){
		$d = $d + 1;
		?>
		<td>
		<center>
			<table border="0" width="610">
				<tr>
					<td width="100">
						<img src="<?php echo $rows['photo']; ?>" width="100" height="100"/>
					</td>
					<td valign="top">
						<font style="color: blue; font-weight: bold;">
						<?php echo $rows['title']; ?><br />			
						</font>
						<?php echo $rows['sumary']; ?>
					</td>	
				</tr>
				<tr>
					<td colspan="2">
						<div class="content">
							<?php echo $rows['detail']; ?>
						</div>
					</td>
				<tr>
			</table>
			<br />
		</center>
		</td>
		
		<?php
		}
		?>
	</tr>
</table>
	
	</td>