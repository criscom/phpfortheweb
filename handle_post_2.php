<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Forum Posting</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-02-24 -->
</head>

<body style="width:900px; margin: 0 auto; font-family:'Gill Sans', Calibri, Arial;">
	
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
		$wordwrap = wordwrap($_POST['posting'], 8, "\n", true);

		// Finding substrings
		// Pulling out the first name
		
		$first = strtok($name, ', ');
		$second = strtok($name, ' ,'); // Pulling out the second name doesn't work
		
		//Counting characters including spaces
		$charactercount = strlen($name);
		
		// Counting words
		$wordcount = str_word_count($name);
		$postcount = str_word_count($posting);
		
		// Limiting words
		
		$posting = substr($posting, 0, 50);
		
		print "<div>Thank you, $name, for your posting:
		
		<p><em>$posting...</em></p>
		<p>It contains $postcount words. I mean the posting. This is a lot!
		<p>&nbsp;</p>
		<h4>Your name</h4>
		<p>There are <strong>$charactercount characters</strong>, inkluding spaces and punctuation in your name, $name!</p>
		<p>There are $wordcount words in your name, $name! We know it all!!!</p>
		<p>---------------</p>
		<h3>Finding substrings</h3>
		<p>$first | $second</p>		
		<p>---------------</p>
		<p>Original: $posting</p>
		<p>Entity: $html_post</p>
		<p>Stripped: $strip_post</p>
		<p>Wordwrap: $wordwrap</p>
		</div>";
		
		$name = urlencode($name);
		$email = urldecode($_POST['email']);
		
		print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";
		
				print "<p><a href=\"posting.html\">Go back</a></p>";
		?>
	</body>
	</html>