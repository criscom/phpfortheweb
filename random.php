<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Lucky Numbers</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-10-26 -->
</head>
<body>

<?php 

error_reporting (E_ALL | E_STRICT);

// Create six mt_randomnumbers:



$n1 = mt_rand (1, 45);
$n2 = mt_rand (1, 45);
$n3 = mt_rand (1, 45);
$n4 = mt_rand (1, 45);
$n5 = mt_rand (1, 45);
$n6 = mt_rand (1, 45);
$n7 = mt_rand (1, 45);


// Print out the numbers

print "<p style=\"text-align: center\";>Deine Nummern für 6 aus 45 lauten:<br /><br />

$n1<br />
$n2<br />
$n3<br />
$n4<br />
$n5<br />
$n6</p>

<p style=\"text-align: center\";>Deine Zusatzzahl lautet:<br /><br />
$n7</p>";

?>

</body>
</html>
