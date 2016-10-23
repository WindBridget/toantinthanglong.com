<?php
$str = "SELECT * FROM tbl_about WHERE id=1";
$result = mysql_query($str);
$rows = mysql_fetch_array($result);
?>	
	<td valign="top" class="tdmain">
		
		<div id="centent">
			<center>
			<div id="gt_ct">
				<p style="font-size:18px;">GIỚI THIỆU NHÓM </p>
			</div>
			</center>
			<div id="top_ct">
				<div id="photo_ct">
					<img src="<?php echo $rows['photo'];?>" width="300px" height="390px" />
				</div>
				<div id="title_ct">
					<div id="title_ct1"><?php echo $rows['title'];?></div>
					<div id="title_ct2"><?php echo $rows['sumary'];?></div>
				</div>
			</div>
			<div id="bot_ct">
				<?php echo $rows['detail'];?>
			</div>
		</div>
	</td>