<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="JS/jquery-2.1.1.min.js"></script>
		<script src="JS/mainJS.js"></script>
		<?php 
			require_once "Include/text.php";
			$language = "English";
			// $language = "Bulgarian";
			$header_menu = get_current_language_words("Languages/English/Header.txt","Languages/".$language."/Header.txt");
		?>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><?php echo $header_menu['People']; ?></li>
					<li><?php echo $header_menu['Information']; ?></li>
					<li><?php echo $header_menu['Pay']; ?></li>
				</ul>
			</nav>
		</header>
		
		<section>
			<?php  include_once "include/switch.php" ?>
		</section>
		
		<footer>
			
		</footer>
	</body>
</html>