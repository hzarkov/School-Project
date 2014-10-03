<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="JS/jquery-2.1.1.min.js"></script>
		<script src="JS/mainJS.js"></script>
		<?php 
			require_once "switch.php";
			// $language = $_COOKIE['Language'];
			// $words = get_current_language_words("Languages/English/Header.txt","Languages/".$language."/Header.txt");
		?>
	</head>
	<body>
		<header>
			<nav>
				<?php include "header-menu.php"?>
			</nav>
			<ul id="choose_language">
				<li data-language="English"><img width="25px;" src="http://www.jicable-hvdc13.fr/images/english_flag.gif"/></li>
				<li data-language="Bulgarian"><img width="25px;" src="http://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Bulgaria.svg"/></li>
			</ul>
		</header>
		
		<section>
			<button value="" id="refresh" style="float:right;width:25px;height:25px;font-size:20px;">&#x21bb;</button>
			<div id="section_content">
			
			</div>
		</section>
		<div class="popup_window">
			<div>
				<button class="close_window">X</button>
				<div class="window_content">
				</div>
			</div>
		</div>
		<footer>
			
		</footer>
	</body>
</html>