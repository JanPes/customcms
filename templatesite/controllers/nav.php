<nav>
	<ul>
		
<?php 

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
	while($row = $result->fetch_assoc()){
		    echo '<li><a href="index.php?page_no=' . $row['page_no'] . '">' . $row['title'] . '</a></li>';
		}
	
?>
</ul>
	
</nav>
