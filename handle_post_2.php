<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Forum Posting</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-02-24 -->
</head>

<body style="width:900px; margin: 0 auto;">
	
	<?php //Script 5.4.1 - handle_post_2.php
		
		ini_set ('display_errors', 1);
		error_reporting (E_ALL | E_STRICT);

		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$posting = nl2br($_POST['posting']);
		
		// Create a full name variable:
		$name = $first_name . ' ' . $last_name;
		
		// Adjust for HTML tags:
		$html_post = htmlentities($_POST['posting']);
		$strip_post = strip_tags($_POST['posting']);
		$wordwrap = wordwrap($_POST['posting'], 20, "<br />\n");
		print "<div>Thank you, $name, for your posting:
		
		<p>Original: $posting</p>
		<p>Entity: $html_post</p>
		<p>Stripped: $strip_post</p>
		<p>Wordwrap: $wordwrap</p>
		</div>";
		
				print "<p><a href=\"posting.html\">Go back</a></p>";
		?>
	</body>
	</html>