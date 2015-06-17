<?php
header('Location: ../index.php?page_no_main='.$_POST['id'].'');	
	include 'connectMainSite.php';
	
    
      $title = $_POST['title'];
	  
	  $heading = $_POST['heading'];
   
      $content = $_POST['content'];
	
      $image = $_POST['image'];
	
      $module = $_POST['module'];
	  
	  $id = $_POST['id']; 
	  
	  if($module == ''){
	  $module = 'NULL';
		  
	  }	
	  else {
		  $module = "'$module'";
	  }
	  
	   
	 
	$sql_update = "UPDATE `mini_site`.`page_content` SET `title` = '$title', `heading` = '$heading', `content` = '$content', `image` = '$image', `module` = $module WHERE `page_content`.`page_no` = $id;";
	$sql_update	.= "UPDATE `mini_site`.`dyn_menu` SET `label` = '$title' WHERE `dyn_menu`.`id` = $id";
			
			if (mysqli_multi_query($db_main, $sql_update)) {
			do {
			   if (!mysqli_more_results($db_main)) {
			    exit();
			   }
			} while (mysqli_next_result($db_main));
			}
						
			mysqli_close($db_main);		
			
?>