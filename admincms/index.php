<?php
include '/controllers/connect.php';
include '/controllers/connectMainSite.php';
require $_SERVER['DOCUMENT_ROOT'] . 'admincms/themes/overallheader.php';
include $_SERVER['DOCUMENT_ROOT'] . 'admincms/themes/header.php';
include 'content.php';
include $_SERVER['DOCUMENT_ROOT'] . 'admincms/themes/footer.php';
require $_SERVER['DOCUMENT_ROOT'] . 'admincms/themes/overallfooter.php';
?>