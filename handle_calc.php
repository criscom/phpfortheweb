<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Product Cost Calculator</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-10-18 -->
	<style type="text/css" media="screen">
		.number {font-weight: bold;}
	</style>
</head>
<body>

<?php // Script 4.2 - handle_calc.php 

ini_set ('display_errors', 1);

$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// $total = $price * $quantity;
// $total = $total + $shipping;
// $total = $total - $discount;

$total = (($price * $quantity) + $shipping) - $discount;

$taxrate = ($tax/100);
$taxrate++;
$total = $total * $taxrate;

$monthly = $total / $payments;

$total = number_format ($total, 2);
$monthly = number_format ($monthly, 2);

print "<p>You have selected to purchase:<br /> 
<span class=\"number\">$quantity</span> widget(s) at <br /> 
US$<span class=\"number\">$price</span> price each plus a <br />
US$<span class=\"number\">$shipping</span> shipping cost and a <br />
<span class=\"number\">$tax</span> percent tax rate.<br />
After your $<span class=\"number\">$discount</span> discount, the total cost is
$<span class=\"number\">$total</span>.<br />
Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";

print "<p><a href=\"calculator.html\">Go back</a></p>";
 

?>

</body>
</html>
