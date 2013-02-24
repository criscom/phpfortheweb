<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Forum Posting</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-11-15 -->
</head>
<body style="width:900px; margin: 0 auto;">
	<?php // Script 5.2 - handle_post.php
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$posting = nl2br($_POST['posting']);
	
	$name = $first_name . ' ' . $last_name;
	// Adjust for HTML tags:
	$html_post = htmlentities($_POST['posting']);
	$strip_post = strip_tags($_POST['posting']);
	
	// Get a word count
	$words = str_word_count($posting);
	

	
	// Get a snippet of the posting:
	$posting = substr($posting, 0, 50);
	
	print "<div style=\"text-align:center; margin-top:100px;\">Thank you, <span style=\"font-weight:bold;\">$name</span>, for your posting:
		<p>$posting...</p>
		<p>($words Wörter)</p>
		</div>";
	
	// Make a link to another page
//	$name = urlencode($name);
//	$email = urlencode($_POST['email']);
//	print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";
//	print '<p>Click <a href="thanks.php?name=' . $name . '&email=' . $email . '">here</a> to continue.</p>';
	
	// Print a message
	
//	print "<div style=\"text-align:center; margin-top:100px;\">Thank you, <span style=\"font-weight:bold;\">$name</span>, for your posting:
//		<p>Original: $posting</p>
//		<p>Entity: $html_post</p>
//		<p>Stripped: $strip_post</p></div>";
		
	// Finding Substrings
	
	$name = $first_name . ' ' . $last_name;
	$first = strtok($name, ' ');
	$last = strtok($name, ', ');
	print "<p>$first</p>"; // Prints only Christoph
	print "$last"; // Prints only Christoph
	$length = strlen($name);
	print "<p>The length of the full name is: $length characters</p>";
		
		print "<p><a href=\"posting.html\">Go back</a></p>";
	
	?>

</body>
</html>
