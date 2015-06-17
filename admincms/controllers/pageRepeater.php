<nav>
	<ul>
		
<?php 

	
	if($db_main->connect_errno > 0){
    die('Unable to connect to database [' . $db_main->connect_error . ']');}
$sql_main = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result_main = $db_main->query($sql_main);
if(!$result_main = $db_main->query($sql_main)){
    die('There was an error running the query [' . $db_main->error . ']');
}
	while($row_main = $result_main->fetch_assoc()){
		    echo '<li><a href="index.php?page_no_main=' . $row_main['page_no'] . '">' . $row_main['title'] . '<span class="editPage"> Edit page</span></a></li>';
		}
	
?>
</ul>
	
</nav>