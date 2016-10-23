<br /><br />
<?php
$base_url= 'index.php?mod=news&';

if($_GET['start'])
	$s = $_GET['start'];
else
	$s = 0; 
$sonewshome = 4;
$query = mysql_query("SELECT * FROM tbl_news"); 
$tongsodong = mysql_num_rows($query);
if($tongsodong==0){
?>
Tin tức chưa được cập nhật!
<?php
}
if($tongsodong >= $sonewshome)
	$str = mysql_query("SELECT * FROM tbl_news limit $s,$sonewshome");
else
	$str = mysql_query("SELECT * FROM tbl_news");
?>
<table width="100%" style="border:1px solid #545d2e;">
<tr>
<td colspan="2" style="background: #6e7846; width: 600px; height: 30px;">
	<font style="font-weight: bold; color: #fff; padding-left:10px;"> Tin Tức </font>
</td>
</tr>
<tr>
	<?php
	$d = 0;
	while($rows = mysql_fetch_array($str)){
		$d = $d+1;
	?>
	<td width="150" align="center" style="padding:5px;">
	
	<table style="border: 1px #545d2e solid; background:url('images/hb.jpg') repeat 0 0;" width="315px">
		<tr>
			<td width="100" valign="top" style="border: 5px #cfd5af solid; ">			
				<img src="<?php echo $rows['photo']; ?>" width="100" height="100">
			</td>
			<td valign="top" class="tdmain" style="background:url('images/hb.jpg') repeat 0 0;">
				<a href="?mod=news&act=detail&id=<?php echo $rows['id']; ?>">
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
	
	</td>