<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mini_site";
	$db = new mysqli($servername, $username, $password, $dbname);
	if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');}
	
$sql = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result = $db->query($sql);
$sql2 = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result2 = $db->query($sql2);
$row2 = $result2->fetch_assoc();
$page_no = substr($_SERVER['QUERY_STRING'], -1);
if ($page_no < 1){
	$page_no = 1;
}
$sql3 = "SELECT content, title, image, module, heading FROM page_content WHERE page_no=$page_no";
$result3 = $db->query($sql3);
$row3 = $result3->fetch_assoc();
$content = $row3['content'];
$heading = $row3['heading'];
$title = $row3['title'];
?>