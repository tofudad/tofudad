<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Tofu Dad chat room">
		<meta name="keywords" content="">
		<link rel="icon" href="../content/photos/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="../content/photos/favicon.ico" type="image/x-icon" />
		<title>Tofu Dad</title>
		<link rel="stylesheet" href="../css/base.css">
	</head>
  
	<body>
		<header>
			<h1>Tofu Dad</h1>
			<h3>Hanover High's Student Community testing</h3>
		</header>
	
		<nav>
			<ul>
				<li><a href="..">Home</a></li>
				<li><a href="../chatroom">Chat Room</a></li>
				<li><a href="../community">Community</a></li>
				<li><a href=".">Contact</a></li>
			</ul>
		</nav>

		<main>
			<h4>Contact Form</h4>
			<form action="contact.php" method="post">
				<p>Your name<p/>
					<input type="text" name="cf_name">
				<p>Your e-mail</p>
					<input type="text" name="cf_email">
				<p>Message</p>
					<input type="text" name="cf_message">
					<input type="submit" value="Send">
					<input type="reset" value="Clear">
			</form>
		</main>

		<footer>
			<p><?php include '../content/global/copyright.php'; ?></p>
		</footer>
	</body>
</html>
