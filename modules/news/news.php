<?php
$a = $_GET['act'];
//echo $a;
switch($a){
	case "detail":
		include("modules/news/detail.php");
		break;
	default:
		include("modules/news/list.php");
		break;
}
?>