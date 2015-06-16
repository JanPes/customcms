
<?php
$sql4 = "SELECT image_id, image_file_path, image_name FROM image_gallery";
$result4 = $db->query($sql4);
$row4 = $result4->fetch_assoc();
if(!$result4 = $db->query($sql4)){
    die('There was an error running the query [' . $db->error . ']');
}
	while($row4 = $result4->fetch_assoc()){
		    echo '<li><a class="fancybox" rel="group" href="includes/images/' . $row4['image_file_path'] . '"><img src="includes/images/' . $row4['image_file_path'] . '"></a></li>';
		}
	
?>
