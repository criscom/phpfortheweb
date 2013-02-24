<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>hello</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-09-24 -->
</head>
<body>
<?php // Script 3.7 - hello.php

ini_set ('display_errors',1);
error_reporting (E_ALL);

$name = $_GET['name'];
$last_name = $_GET['last_name'];
$age = $_GET['age'];
print "<p>Hello, <span style=\"font-weight:bold;\">$name $last_name</span>!</p><p>And you are $age years old.</p>";

?>
</body>
</html>
