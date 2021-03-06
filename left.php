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
			include 'components/header.html';
		?>	
		<div id="content">

			<div id="gameWrapper">
				<div id="selectedGame">
					<div id="game_div" style="width:400px; height:400px;"><!-- Change Game size here -->
						<script src="./games/left/Boot.js"></script>
						<script src="./games/left/Preloader.js"></script>
						<script src="./games/left/Game.js"></script>
						<script src="./games/left/Death.js"></script>
						<script src="./games/left/Game2.js"></script>
						<script src="./games/left/Death2.js"></script>
						<script>
							var game = new Phaser.Game(400, 400, Phaser.CANVAS, "game_div"); // Phaser engine initialization
							game.state.add('Boot', Scene.Boot); // scene to start loading game assets.
							game.state.add('Preloader', Scene.Preloader); // loading game assets
							game.state.add('Block', Scene.BlockGame);
							game.state.add('BlockDeath', Scene.BlockDeath);
							game.state.add('Game', Scene.Game); // fist proper game screen
							game.state.add('Death', Scene.Death);
							game.state.start('Boot'); // Go to Boot scene (start the game)
						</script>
					</div>
					<!-- Game initialization... way to complicated for no reason. -->
					<!-- i plan to change the way the games are booted to make the initialization more modular -->
				</div>
				<div id="description">
					<strong>Left Block / Left Shark</strong><hr/>
					<u>Start Date:</u> March 5, 2015 <br/>
					<u>Completion Date:</u> March 9, 2015 <br/>
					<br/>
					This game was originally inspired by the <u><a href="http://knowyourmeme.com/memes/super-bowl-xlix-halftime-left-shark">Super Bowl Left shark meme</a></u>,
					However due to my lack of artistic ability, I remodelled it from 'Left Shark' to 'Left Block' with much simpler graphics.
					<br/>
					It plays similarly the the classic game <i>Snake</i>, with the twist that you can only turn left, 
					as well as some additional gameplay elements.
				</div>				
			</div>
			<?php
				include 'components/games.html';
			?>
		</div>
		<?php
			include 'components/footer.html';
		?>
	</body>
</html>