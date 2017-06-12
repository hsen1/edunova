<form method="POST">
<span>Unesite vrijednost:</span>
<input type="number" name="v" />
<input type="submit" value="Ispiši">
</form>

<?php
// zadana varijabla
$v=isset($_POST["v"]) ? $_POST["v"] : "";

// provjerava je li postavljena varijabla
if (isset($_POST["v"]) != true){
	echo "Morate unijeti vrijednost";
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

// ispisuje vrijednost niza
	echo "Vrijednost fibonaccijevog niza je " . $x[$y-1] / $x[$y-2];	 
}

?>