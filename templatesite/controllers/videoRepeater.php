<?php
$sql5 = "SELECT video_id, video_title, video_desc, video_url FROM video_gallery";
$result5 = $db->query($sql5);
$row5 = $result5->fetch_assoc();
if(!$result5 = $db->query($sql5)){
    die('There was an error running the query [' . $db->error . ']');
}
	while($row5 = $result5->fetch_assoc()){
		    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $row5['video_url'] .'" frameborder="0" allowfullscreen></iframe>';
			echo '<h3>' . $row5['video_title'] . '</h3>';
			echo '<p>' . $row5['video_desc'] . '</p>';
		}
	
?>
