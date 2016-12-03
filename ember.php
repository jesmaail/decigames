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
					<div id="game_div" style="width:640px; height:300px;"><!-- Change Game size here -->
						<script src="./games/fire/Boot.js"></script>
						<script src="./games/fire/Preloader.js"></script>
						<script src="./games/fire/Game.js"></script>
						<script src="./games/fire/Death.js"></script>
						<script>
							var game = new Phaser.Game(640, 300, Phaser.CANVAS, "game_div"); // Phaser engine initialization
							game.state.add('Boot', Scene.Boot); // scene to start loading game assets.
							game.state.add('Preloader', Scene.Preloader); // loading game assets
							game.state.add('Game', Scene.Game); // fist proper game screen
							game.state.add('Death', Scene.Death);
							game.state.start('Boot'); // Go to Boot scene (start the game)
						</script>
					</div>
					<!-- Game initialization... way to complicated for no reason. -->
					<!-- i plan to change the way the games are booted to make the initialization more modular -->
				</div>
				<div id="description">
					<strong>Title of Game</strong><hr/>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi nunc, ornare a lectus nec, mattis blandit libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris metus libero, placerat a urna sit amet, imperdiet mattis ex. Nunc arcu arcu, consectetur a justo vulputate, aliquam aliquam purus. Mauris vitae sem non enim vehicula ornare placerat sed libero. Proin vehicula feugiat enim non pulvinar. Vestibulum mi dui, ultricies vel ex viverra, suscipit porttitor orci. Donec ut arcu a tellus tempus rutrum eget quis lectus. Quisque commodo ultricies sagittis. Maecenas elementum tincidunt augue ut maximus. Suspendisse potenti.

					Vivamus quis purus vestibulum, euismod quam ut, tincidunt arcu. Nullam ut metus egestas nulla maximus molestie ut ac lectus. Donec ut tincidunt ipsum, nec semper sem. Integer congue, libero eu porttitor mattis, massa magna elementum dui, id tempus odio arcu ut est. Maecenas nec sodales ipsum, id sollicitudin turpis. Sed porttitor mollis erat id suscipit. Mauris tempor eleifend condimentum. Pellentesque interdum sed magna sit amet faucibus. Nullam a eros in odio tincidunt aliquet. Nunc ultricies iaculis leo in auctor.
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