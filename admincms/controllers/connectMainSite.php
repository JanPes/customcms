<?php

	$servername_main = "localhost";
	$username_main = "root";
	$password_main = "";
	$dbname_main = "mini_site";
	$db_main = new mysqli($servername_main, $username_main, $password_main, $dbname_main);
	if($db_main->connect_errno > 0){
    die('Unable to connect to database [' . $db_main->connect_error . ']');}
	
$sql_main = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result_main = $db_main->query($sql_main);
$sql2_main = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result2_main = $db_main->query($sql2_main);
$row2_main = $result2_main->fetch_assoc();
$page_no_main = substr($_SERVER['QUERY_STRING'], -2);
if ($page_no_main < 1){
	$page_no_main = 1;
}
$sql3_main = "SELECT content, title, image, module, heading FROM page_content WHERE page_no=$page_no_main";
$result3_main = $db_main->query($sql3_main);
$row3_main = $result3_main->fetch_assoc();
$content_main = $row3_main['content'];
$heading_main = $row3_main['heading'];
$title_main = $row3_main['title'];
$image_main = $row3_main['image'];
?>