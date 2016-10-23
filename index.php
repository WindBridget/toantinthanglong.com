<?php
ob_start();
session_start();
include("includes/config.php");
include("includes/common.php");
include("includes/function.php");
include("modules/header/header.php");
$module = $_GET['mod'];		
switch($module){
	case 'news':
		include("modules/news/news.php");
		break;	
	case 'inf':
		include("modules/inf/inf.php");
		break;
	case 'about':
		include("modules/about/about.php");
		break;
	case 'product':
		include("modules/product/product.php");
		break;
	case 'contact':
		include("modules/contact/contact.php");
		break;
	case 'cart':
		include("modules/cart/cart.php");
		break;		
	case 'customer':
		include("modules/customer/customer.php");
		break;		
	case 'search':
		include("modules/search/search.php");
		break;				
	default:
		include("modules/home/home.php");
		break;		
}
include("modules/right/right.php");
include("modules/footer/footer.php");
?>