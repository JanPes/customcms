<?php
   $arg = substr($_SERVER['QUERY_STRING'], 0, 9);
  
    $module = $row3['module'];
	if($arg == 'page_no_m'){
		include 'modules/update.php';
	}
	elseif($module == !null){
    	include 'modules/' .$module . '.php';
    }
	else
?>