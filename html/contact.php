<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home - Ovis: 1st AI-Powered Suitcase</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<div class="header-logo">
			<img src="ovis-logo-white.png" alt="Ovis logo" height="50px">
			<p><strong>by</strong></p>
			<img src="fowardx-logo-white.png" alt="FowardX logo" height="30px">
		</div>
		<div class="header-menu">
			<a href="https://www.indiegogo.com/projects/ovis-1st-ai-powered-suitcase-following-by-side"><p>Indiegogo</p></a>
			<a href="contact.html"><p>Contact</p></a>
			<a href="preorder.html"><p>Pre-order</p></a>
			<a href="about.html"><p>About</p></a>
			<a href="index.html"><p>Home</p></a>
		</div>
	</div>
	<div class="main">
		<h1 style="font-size: 48px;margin-bottom:-10px;">Pre-order complete</h1>
		<p>The following response was recieved:</p>
		<p>Name: <?php echo $_POST["name"]; ?></p>
		<p>Email Address: <?php echo $_POST["email"]; ?></p>
		<p>Message: <?php echo $_POST["message"]; ?></p>
		<?php /*
		if (!file_exists("log")){
			mkdir("log", 0744);
		} */
		$logfile = fopen("msg.txt", "a");
		fwrite($logfile, $_SERVER['REMOTE_ADDR'] . "@" . getdate()[0] . ": " . $_POST["firstname"] . ", " . $_POST["email"] . ", " . $_POST["message"] . "\n\n\n\n");
		fclose($logfile)?>
	</div>
	<div class="footer">
		<div class="footer-top">
			<div class="footer-logo">
				<img src="ovis-logo-white.png" alt="Ovis logo" height="50px"> <p><b>by</b></p> <img src="fowardx-logo-white.png" alt="FowardX logo" height="30px">
			</div>
			<div class="footer-menu">
				<a href="https://www.indiegogo.com/projects/ovis-1st-ai-powered-suitcase-following-by-side"><p>Indiegogo</p></a>
				<a href="preorder.html"><p>Pre-order</p></a>
				<a href="index.html"><p>Home</p></a>
			</div>
		</div>
		<div class="footer-copyright">
			<p>This unofficial website made by Chatswood High School students</p>
			<p>The Ovis logo, the ForwardX logo, other images, and related branding material belong to FowardX</p>
		</div>
	</div>
</body>
</html>
