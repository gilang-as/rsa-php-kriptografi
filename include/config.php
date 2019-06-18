<?php
error_reporting(0);
session_start();
$hostname="http://project/kuliah/des/";
include('function.php');

//e=5, d=77, n=221
//e=35, d=11, n=199
//e=13, d=37, n=119
//e=31, d=31, n=119
if(isset($_SESSION['e']) && isset($_SESSION['d']) && isset($_SESSION['n'])){
	$e=$_SESSION['e'];
	$d=$_SESSION['d'];
	$n=$_SESSION['n'];
}else{
	$e=35;
	$d=11;
	$n=199;

	//$_SESSION['e']=35;
	//$_SESSION['d']=11;
	//$_SESSION['n']=199;
	//print_r($_SESSION);
}

?>