<?phpfunction chk_per(){	$m = $_GET['mod'];	$strm = "SELECT * FROM tbl_modules WHERE name='$m'";	$resultm = mysql_query($strm);	$rowsm = mysql_fetch_array($resultm);	$idm = $rowsm['id'];	$idgu = $_SESSION['idgu'];	$strper = "SELECT * FROM tbl_permision WHERE id_group_user='$idgu' AND id_modules='$idm'";	$resultper = mysql_query($strper);	$rowsper = mysql_fetch_array($resultper);	if(!$rowsper)		header('location: index.php?mod=member&act=error');}//Ham kiem tra email khi dang ky tai khoanfunction chk_email(){	$e = $_POST['email'];	$str = "SELECT * FROM tbl_customer WHERE email = '$e'";		$result = mysql_query($str);	$rows = mysql_fetch_array($result);	if($rows)		return true;	else		return false;	}//Ham xu ly doi mat khau khi dang ky tai khoanfunction chk_resetkey(){	$rk = $_GET['resetkey'];	$e = $_GET['email'];	$str = "SELECT * FROM tbl_customer WHERE resetkey = '$rk' AND email = '$e'";		$result = mysql_query($str);	$rows = mysql_fetch_array($result);	if($rows)		return true;	else		return false;	}//Ham cat chuoifunction truncateString($str, $chars, $to_space, $replacement="...") {   if($chars > strlen($str)) return $str;   $str = substr($str, 0, $chars);   $space_pos = strrpos($str, " ");   if($to_space && $space_pos >= 0) {       $str = substr($str, 0, strrpos($str, " "));   }   return($str . $replacement);}//Ham phan trangfunction pagenav($base_url, $start, $max_value, $num_per_page) {//Chuyen Dao Tao PHP & MySQL thuc te, chuyen nghiep tai Ha Noi.//Pham Hung Thang//DT: 0982.858506//YM: hungthangitv//Email: hungthangitvn@gmail.com//Website: www.htvsite.com$pgcont = 4;$pgcont = (int) ($pgcont - ($pgcont % 2)) / 2;if ($start >= $max_value)$start = max(0, (int) $max_value - (((int) $max_value % (int) $num_per_page) == 0 ? $num_per_page : ((int) $max_value % (int) $num_per_page)));else$start = max(0, (int) $start - ((int) $start % (int) $num_per_page));$base_link = '<a class="navpg" href="' . strtr($base_url, array('%' => '%%')) . 'start=%d' . '">%s</a> ';$pageindex = $start == 0 ? '' : sprintf($base_link, $start - $num_per_page, '&lt;');if ($start > $num_per_page * $pgcont)$pageindex .= sprintf($base_link, 0, '1');if ($start > $num_per_page * ($pgcont + 1))$pageindex .= '<span style="font-weight: bold;"> ... </span>';for ($nCont = $pgcont; $nCont >= 1; $nCont--)if ($start >= $num_per_page * $nCont) {$tmpStart = $start - $num_per_page * $nCont;$pageindex .= sprintf($base_link, $tmpStart, $tmpStart / $num_per_page + 1);}$pageindex .= '[<b>' . ($start / $num_per_page + 1) . '</b>] ';$tmpMaxPages = (int) (($max_value - 1) / $num_per_page) * $num_per_page;for ($nCont = 1; $nCont <= $pgcont; $nCont++)if ($start + $num_per_page * $nCont <= $tmpMaxPages) {$tmpStart = $start + $num_per_page * $nCont;$pageindex .= sprintf($base_link, $tmpStart, $tmpStart / $num_per_page + 1);}if ($start + $num_per_page * ($pgcont + 1) < $tmpMaxPages)$pageindex .= '<span style="font-weight: bold;"> ... </span>';if ($start + $num_per_page * $pgcont < $tmpMaxPages)$pageindex .= sprintf($base_link, $tmpMaxPages, $tmpMaxPages / $num_per_page + 1);if ($start + $num_per_page < $max_value) {$display_page = ($start + $num_per_page) > $max_value ? $max_value : ($start + $num_per_page);$pageindex .= sprintf($base_link, $display_page, '&gt;');}return $pageindex;}?>