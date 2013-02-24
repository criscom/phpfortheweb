<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>quotes</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-09-22 -->
</head>
<body>
<?php // Script 2.4 - quotes.php

$first_name = "Christoph";
$last_name = "Potzinger";

$name1 = '$first_name $last_name';
$name2 = "$first_name $last_name";

print "<h1>Double Quotes</h1><p>name1 is $name1 <br /> name2 is $name2</p>";
print '<h1>Single Quotes</h1><p>name1 is $name1 <br /> name2 is $name2</p>';

print $name2;

?>
</body>
</html>
