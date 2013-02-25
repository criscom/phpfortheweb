<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Forum Posting</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-02-24 -->
</head>

<body style="width:900px; margin: 0 auto; font-family:'Gill Sans', Calibri, Arial;">

<?php

$name = $_GET['name'];
$email = $_GET['email'];

$name = urldecode($name);
$email = urldecode($email);

print"<div><p><strong>$name</strong>!</p>
<p>We got your email alright: <em>$email</em></p></div>";

print "<p><a href=\"posting.html\">Go back</a></p>";

?>

</body>
</html>