<select name="module" id="module">
<?php 

	
	if($db_main->connect_errno > 0){
    die('Unable to connect to database [' . $db_main->connect_error . ']');}
$sql_main = "SELECT DISTINCT module from page_content";
$result_module = $db_main->query($sql_main);
if(!$result_module = $db_main->query($sql_main)){
    die('There was an error running the query [' . $db_main->error . ']');
}
	while($row_module = $result_module->fetch_assoc()){
		    echo '<option value="' . $row_module['module'] . '">' . $row_module['module'] . '</option>';
		}
	
?>
</select> 