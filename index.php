<!DOCTYPE html>
<html>
	<head>
		<title>Deci Games</title>
		<script src="./js/jquery.js"></script>
		<script src="./js/functions.js"></script>
		<script src="./js/phaser.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
	<?php
		include './components/header.html';
	?>
		<div id="content">

			<div id="gameWrapper">
				
			</div>

			<?php
				include './components/games.html';
			?>
		</div>
		<?php
			include './components/footer.html';
		?>
	</body>
</html>