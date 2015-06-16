<?php
    $module = $row3['module'];
    if($module == !null){
    	include 'modules/' .$module . '.php';
    }
	else
?>