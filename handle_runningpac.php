<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>handle_runningpac</title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Christoph Potzinger">
	<!-- Date: 2012-10-26 -->
</head>
<body>
<?php

$stunden = $_POST['stunden'];
$minuten = $_POST['minuten'];
$sekunden = $_POST['sekunden'];
$distanz = $_POST['distanz'];

// Berechnung der gelaufenen Gesamtsekunden
$gesamtsekunden = ($stunden*3600) + ($minuten*60) + ($sekunden);

// Wenn Distanzen mit Kommastellen eingegeben werden == 42.195; Kilometer ohne Kommastelle == 42
$distanzkilometer = floor ($distanz);

// Gesamtdistanz in Meter
// 42.195 - 42 = 0.195 * 1000 = 195 + 42*1000 = 42195 errechnet die Meter des angebrochenen Kilometers
$gesamtdistanzmeter = (($distanz - $distanzkilometer) * 1000) + ($distanzkilometer*1000);
print "<p style=\"font-style: italic; font-size: 10px;\">Die Gesamtdistanz in Metern beträgt: $gesamtdistanzmeter</p>";

// Berechnung der gelaufenen Gesamtsekunden pro Kilometer ==> * 1000 um auf den Kilometer zu kommen (1000 m)
$gesamtsekunden = ((($stunden*3600) + ($minuten*60) + ($sekunden)) / $gesamtdistanzmeter) * 1000;

// Rausrechnen der Minuten pro Kilometer
$gesamtminuten = $gesamtsekunden / 60;

print "<p style=\"font-style: italic; font-size: 9px;\"> gesamtminuten = $gesamtminuten</p>";

// Zieht die Nachkommastellen ab; zB 4.98333 min ==> 4
$mingerundet = floor ($gesamtminuten);

print "<p style=\"font-style: italic; font-size: 9px;\"> mingerundet = $mingerundet </p>";


// wir ziehen von den Minuten pro Kilometer, die Vorkommastelle ab ==> floor Befehl und multiplizieren mit 60 um auf die Sekunden zu kommen
$sekundenprokm = ($gesamtminuten - $mingerundet) * 60;

// keine Kommastelle bei den Sekunden
$sekundenprokm = number_format ($sekundenprokm, 0);

// Sekunden sollen immer 2stellig dargestellt werden
$sekundenprokm = str_pad($sekundenprokm, 2, "0", STR_PAD_LEFT);

// $mingerundet = number_format ($gesamtminuten, 0); rundet leider auf


print "<p>Ihre Laufleistung über <strong>$distanz</strong> km beträgt:<p><strong>$mingerundet:$sekundenprokm</strong> Minuten/Kilometer</p>";

print "<p><a href=\"runningpace-calculator.html\">Go back</a></p>";

?>

</body>
</html>


