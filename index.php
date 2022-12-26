<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="yo.css">
	<link rel="icon" href="img/16x16.png">
	<title>the fruit bowl</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#COLORHEX">
	<meta property="og:site_name" content="Name of your website">
	<meta property="og:url" content="https://domain.com">
	<meta property="og:title" content="Name of your page">
	<meta property="og:description" content="A little description of this page">
	<meta property="og:type" content="website">
	<meta name="og:image" itemprop="image" content="img/64x64.png">
</head>
<body>
	<header>
		<div id="nav">
			<div><a href="login">log in</a></div>
			<div><a href="join">join</a></div>
		</div>
		<h1>the fruit bowl</h1>
	</header>
	<div id="bg">
		<img src="/img/cube.webp">
	</div>
	<footer>
		<div id="desc">
		<?php
		$x = rand(0,31);
		switch($x){
			case(0):
				echo("kill");
				break;
			case(1):
				echo("dont");
				break;
			case(2):
				echo("brooooooo what the hellll is this");
				break;
			default:
				echo("");
				break;
		}
		?>
		</div>
		<a href=""><img src="img/64x64.png"></a>
	</footer>
</body>
</html>
