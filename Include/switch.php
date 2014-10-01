<?php 
	$page = (isset($_GET['page'])) ? $_GET['page']:"";
	$page = str_replace($symbol,'/',$page);
	$page = "Modules/".strtolower($page).".php";
	if(file_exists($page)){
		include_once $page;
	}
	include_once "Modules/news.php";