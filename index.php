<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<script src="JS/jquery-2.1.1.min.js"></script>
		<script src="JS/mainJS.js"></script>
		<?php 
			require_once "Include/switch.php";
			require_once "Include/text.php";
			// $language = "English";
			$language = "Bulgarian";
			$header_menu = get_current_language_words("Languages/English/Header.txt","Languages/".$language."/Header.txt");
		?>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><?php echo $header_menu['People']; ?></li>
					<li><a href=""><?php echo $header_menu['Add']; ?></a></li>
					<li><a href=""><?php echo $header_menu['Remove']; ?></a></li>
					<li><a href=""><?php echo $header_menu['Add work time']; ?></a></li>
				</ul>
				<ul>
					<li><?php echo $header_menu['Information']; ?></li>
					<li><a href=""><?php echo $header_menu['For this week']; ?></a></li>
					<li><a href=""><?php echo $header_menu['Older']; ?></a></li>
				</ul>
				<ul>
					<li><?php echo $header_menu['Pay']; ?></li>
					<li><a href=""><?php echo $header_menu['With credit card']; ?></a></li>
					<li><a href=""><?php echo $header_menu['Cash']; ?></a></li>
				</ul>
			</nav>
		</header>
		
		<section>
		
		</section>
		
		<footer>
			
		</footer>
	</body>
</html>