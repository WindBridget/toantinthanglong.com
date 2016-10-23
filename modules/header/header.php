<html>
<head>
	<title>Nhóm Fantastic Four | k25 | Đại học Thăng Long ! </title>
	<link rel="stylesheet" href="style.css" type="text/css" />		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="js/menu.js" type="text/javascript"></script>
	<script src="js/function.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/mootools.js"></script>
	<script type="text/javascript" src="js/tipsx3.js"></script>	
	<script type="text/javascript" 
			src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
			<script type="text/javascript">
			var map;
			function initialize() {
				  var myLatlng = new google.maps.LatLng(21.03653847954601,105.81088721752167);
				  var myOptions = {
				zoom: 17,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(document.getElementById("div_id"), myOptions); 
			  // Biến text chứa nội dung sẽ được hiển thị
			var text;
			text= "";
			   var infowindow = new google.maps.InfoWindow(
				{ content: text,
					size: new google.maps.Size(200,50),
					position: myLatlng
				});
				   infowindow.open(map);    
				var marker = new google.maps.Marker({
				  position: myLatlng, 
				  map: map,
				  title:"Nhà Ru"
			  });
			}
			google.setOnLoadCallback(initialize);
			</script>
</head>
<body>
<center>
	<table style="border: 1px #c5e4ff solid; width: 960px;">
		<tr>
			<td colspan="3" height="300">
				<table border="0">
					<tr>
						<td align="center">
							<a href="https://www.facebook.com/Ru.Finiarel?ref=tn_tnmn">
								<img src="images/003.jpg"  width="968px" style="border: 3px #c5e4ff solid;" />
							</a>
						</td>
					</tr>					
					<tr>
						<td align="center" style="font-weight: bold; border: 0px #474747 solid; width: 968px; background:url('images/footerbg.jpg'); height: 36px;">
							<table border="0" style="font-weight: bold; width: 900px;">
							<tr>									
								<td ><a href="index.php" style="color: #f6f6f6;" >Trang Chủ</a></td>
								<td ><a href="index.php?mod=about" style="color: #f6f6f6;">Giới Thiệu</a></td>
								<td ><a href="index.php?mod=news" style="color: #f6f6f6;">Tin Tức</a></td>
								<td ><a href="index.php?mod=inf" style="color: #f6f6f6;">Thông Tin Thành Viên</a></td>
								
							</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		