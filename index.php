<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Tofu Dad home page">
		<meta name="keywords" content="">
		<link rel="icon" href="/content/photos/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/content/photos/favicon.ico" type="image/x-icon" />
		<title>Tofu Dad</title>
		<link rel="stylesheet" href="css/base.css">
	</head>
  
	<body>
		<header>
			<h1>Tofu Dad</h1>
			<h3>Hanover High's Student Community</h3>
		</header>
	
		<nav>
			<ul>
				<li><a href=".">Home</a></li>
				<li><a href="./chatroom">Chat Room</a></li>
				<li><a href="./community">Community</a></li>
				<li><a href="./contact">Contact</a></li>
			</ul>
		</nav>

		<main>
			<div id="sidebar">
				<h2>Disclaimer</h2>
				<p><?php include './content/global/disclaimer.php'; ?></p>
			</div>
			
			<button type="button">Post</button>
		</main>

		<footer>
			<p><?php include './content/global/copyright.php'; ?></p>
		</footer>
	</body>
</html>
