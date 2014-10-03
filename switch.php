<?php 
	require_once "inc.php";
	$language = $_COOKIE['Language'];
	$words = get_current_language_words("Languages/English/Header.txt","Languages/".$language."/Header.txt");
	$page = (isset($_REQUEST['page'])) ? $_REQUEST['page']:"";
	$page = str_replace('_','/',$page);
	$page = strtolower($page).".php";
	if(file_exists($page)){
		include_once $page;
	}
	
	$dbh = null;