<?php
defined('THE_HEAD') or die();
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
?>

<?php
$db="varmepumpdb";
$usr="root";
$host="localhost";
$pass="";
$con = mysqli_connect($host,$usr,$pass,$db) or die("Error: " . mysqli_error($con));
mysqli_set_charset($con, 'utf8');
mysqli_select_db($con, 'varmepumpdb');

?>
<script type="application/javascript" src="http://jsonip.appspot.com/?callback=getip"></script>
<meta charset=UTF-8 />
<title></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->