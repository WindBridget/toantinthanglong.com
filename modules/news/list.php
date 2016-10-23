	<td valign="top" align="center" class="tdmain">
<?php
$base_url= 'index.php?mod=news&';

if($_GET['start'])
	$s = $_GET['start'];
else
	$s = 0; 
	$sonews = 8;
$query = mysql_query("SELECT * FROM tbl_news"); 
$tongsodong = mysql_num_rows($query);
if($tongsodong==0){
?>
Tin tức chưa được cập nxhật!
<?php
}
if($tongsodong >= $sonews)
	$str = mysql_query("SELECT * FROM tbl_news limit $s,$sonews");
else
	$str = mysql_query("SELECT * FROM tbl_news");
?>
<table width="654px" border="0" style=" border:1px solid #545d2e; margin-top:15px">
<tr>
	<?php
	$d = 0;
	while($rows = mysql_fetch_array($str)){
		$d = $d+1;
	?>
	<td width="150" align="center" style="padding: 5px">
	
	<table style="border: 1px #545d2e solid; background:url('images/hb.jpg') repeat 0 0;" width="315px">
		<tr>
			<td width="100" valign="top" style="border: 5px #cfd5af solid;">			
				<img src="<?php echo $rows['photo']; ?>" width="100" height="100">
			</td>
			<td valign="top" class="tdmain" style="background:url('images/hb.jpg') repeat 0 0;">
				<a href="?mod=news&act=detail&id=<?php echo $rows['id']; ?>" style="color: #000;">
				<font style="color: #000; font-weight: bold;">
					<?php 
						$title = truncateString($rows['title'], 50, true);
						echo $title; 
					?>					
				</font>
				</a>
			<br />
				<?php
					$sumary = truncateString($rows['sumary'], 100, true);
					echo $sumary; 
				?>
			</td>
		</tr>
	</table>
	
	</td>
	<?php	
		if($d%2==0)
		echo "</tr>";
	}
	?>
</tr>
</table>
	<?php
	echo pagenav($base_url, $s, $tongsodong, $sonews);
	?>
	
	</td>