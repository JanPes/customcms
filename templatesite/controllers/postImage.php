<?php
    $image = $row3['image'];
    if($image == !null){
    	echo '<img class="homePageImage" alt="this is a photo" src="includes/images/' . $row3['image'] . '"/>';
    }
	else echo '';
    
?>