<?php

print_r($_POST);

if($_POST["korisnik"]=="edunova" && $_POST["lozinka"]=="edunova"){
	//logiran si
	session_start();
	$_SESSION["logiran"]=$_POST["korisnik"];
	header("location: scripts/private/controlPanel.php");
}else{
	//nisi logiran
	header("location: login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}
