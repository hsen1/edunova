<?php

//Program
//Program prima 3 broja
//Za njih se ispisuju osnovne računske operacije i njihovi rezultati (zbrajanje, oduzimanje, mnozenje i dijeljenje)
//Posljednji broj služi da se dobije prosjek dobivenih rezultata
//dz2.php?br1=&br2=

$rez1 = $_GET["br1"] + $_GET["br2"];
$rez2 = $_GET["br1"] - $_GET["br2"];
$rez3 = $_GET["br1"] * $_GET["br2"];
$rez4 = $_GET["br1"] / $_GET["br2"];
$rez = ($rez1 + $rez2 + $rez3 + $rez4) / 4;
?>
<ol>
	<li>
		<?php echo "Rezultat zbrajanja je " . $_GET["br1"] . " + " . $_GET["br2"] . " = " . $rez1; ?>
	</li>
	<hr />
	<li>
		<?php echo "Rezultat oduzimanja je " . $_GET["br1"] . " - " . $_GET["br2"] . " = " . $rez2; ?>
	</li>
	<hr />
	<li>
		<?php echo "Rezultat množenja je " . $_GET["br1"] . " * " . $_GET["br2"] . " = " . $rez3; ?>
	</li>
	<hr />
	<li>
		<?php echo "Rezultat djeljenja je " . $_GET["br1"] . " / " . $_GET["br2"] . " = " . $rez4; ?>
	</li>
	<hr />
</ol>
<ul>
	<li>
		<?php echo "Prosjek zbrojenih rezultata iznosi " . $rez; ?>
	</li>
</ul>
<hr />
