<?php
$a = $_GET['act'];
//echo $a;
switch($a){
	case "detail":
		include("modules/inf/detail.php");
		break;
	default:
		include("modules/inf/list.php");
		break;
}
?>