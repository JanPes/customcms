<?php 
header('Location: ../index.php?page_no=4');	
	include 'connectMainSite.php';
	
    
      $id = $_POST['id']; 
	  	
	  
	  
	  
	 
	$sql_delete = "DELETE FROM `mini_site`.`dyn_menu` WHERE `dyn_menu`.`id` = $id";
	$result = $db_main->query($sql_delete);
									
				
	
?>