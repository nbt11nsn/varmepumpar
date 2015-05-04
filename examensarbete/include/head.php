<?php
$first_name = 'David';
echo mt_rand(1, 10000);
setcookie('first_name',$first_name,time() + (86400 * 7)); // 86400 = 1 day
defined('THE_HEAD') or die();
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
$contractid = "(SELECT LAST_INSERT_ID() from ansokning)";
?>

<script type="application/javascript" src="http://jsonip.appspot.com/?callback=getip"></script>
<meta charset=UTF-8 />
<title></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->