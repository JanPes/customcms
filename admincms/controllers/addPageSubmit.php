<?php
header('Location: ../index.php?page_no=4');	
	include 'connectMainSite.php';
	
    
      $title = $_POST['title'];
	  
	  $heading = $_POST['heading'];
   
      $content = $_POST['content'];
	
      $image = $_POST['image'];
	
      $module = $_POST['module'];
	  
	 
	   
	  
	     
      $sql_add_content1 = "INSERT INTO `mini_site`.`dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES (NULL, '$title', '$title', '0');";
	  $sql_add_content1 .= "INSERT INTO `mini_site`.`page_content` (`page_no`, `title`, `heading`, `content`, `image`, `module`) VALUES (LAST_INSERT_ID(), '$title', '$heading', '$content', '$image', '$module')";
	
			if (mysqli_multi_query($db_main, $sql_add_content1)) {
			do {
			   if (!mysqli_more_results($db_main)) {
			    exit();
			   }
			} while (mysqli_next_result($db_main));
			}
						
			mysqli_close($db_main);
 			
			
?>