<?php
// zadana varijabla
$v=isset($_GET["v"]) ? $_GET["v"] : "";

// provjerava je li postavljena varijabla
if (isset($_GET["v"]) != true){
	echo "Morate postaviti vrijednost";
} else if ($v < 2) {
	echo "Unesena vrijednost mora biti 2 ili više";
} else
{
echo "Fibonaccijev niz za prvih " . $v . " brojeva je ";
echo "<br />"; 

// vrijednost polja
$x = array("", 1,0);

// petlja koja ispisuje fibonaccijev niz
$v+=2;
for ($y = 3; $y <= $v; $y++) 
{
	$x[$y] = $x[$y - 1] + $x[$y - 2];
	echo $x[$y];
	echo "<br />";
}
echo "<br />";

// prvojera je li uneseni broj veći od 2
	echo "Vrijednost fibonaccijevog niza je " . $x[$y-1] / $x[$y-2];	 
}

?>