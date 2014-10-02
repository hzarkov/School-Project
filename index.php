<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="JS/jquery-2.1.1.min.js"></script>
		<script src="JS/mainJS.js"></script>
		<?php 
			require_once "inc.php";
			// $language = "English";
			$language = "Bulgarian";
			$header_menu = get_current_language_words("Languages/English/Header.txt","Languages/".$language."/Header.txt");
		?>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li data-page="people"><?php echo $header_menu['People']; ?></li>
					<li data-page="information"><?php echo $header_menu['Information']; ?></li>
					<li data-page="add-work-time"><?php echo $header_menu['Add work time']; ?></li>
					<li data-page="pay"><?php echo $header_menu['Pay']; ?></li>
				</ul>
			</nav>
		</header>
		
		<section>
		
		</section>
		
		<footer>
			
		</footer>
	</body>
</html>