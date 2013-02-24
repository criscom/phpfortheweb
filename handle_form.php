<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Your Feedback</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-09-23 -->
</head>
<body>

<?php // Script 3.3. handle_form.php

ini_set ('display_errors', 1);
// Let me learn from my mistakes

// error_reporting (E_ALL | E_STRICT);

// This page receives the data from feedback.html.
// It will receive: title, name, email, response, comments, and submit in $_POST.

$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p>Thank you, $title $name, for your comments.</p><p>You stated that you found this example to be '$response' and added:<br />$comments<p/>";

?>

</body>
</html>
