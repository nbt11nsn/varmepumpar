<?php
defined('THE_HEAD') or die();
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');

$db="varmepumpdb";
$usr="root";
$host="localhost";
$pass="";
$con = mysqli_connect($host,$usr,$pass,$db) or die("Error: " . mysqli_error($con));
mysqli_set_charset($con, 'utf8');
mysqli_select_db($con, 'varmepumpdb');

$isqlpers = "SELECT ID FROM ansokning";
$myArray = array();

$iresult = mysqli_query($con, $isqlpers);
	if (mysqli_num_rows($iresult) != 0) {
      while($irows2 = mysqli_fetch_array($iresult)) {
	$myArray[] = $irows2['ID'];	
	}
}

if(isset($_COOKIE['ID'])){
} 
else{
	//select_last_inserted_ID() istället för ett slumpat tal?
	$randomnumber = mt_rand(1, 10000);
		while(in_array($randomnumber, $myArray)) {	
			$randomnumber = mt_rand(1, 10000);
	}   
	setcookie('ID',$randomnumber,time() + (1440*28));//Cookien kommer finnas tillgänglig i 1 månad
	$_COOKIE['ID'] = $randomnumber;
	}
?>
<meta charset=UTF-8 />
<title></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
