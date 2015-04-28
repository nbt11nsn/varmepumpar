<?php
defined('THE_HEAD') or die();
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
$contractid = "(SELECT LAST_INSERT_ID() from ansokning)";
echo $checkMaxID;
?>
<meta charset=UTF-8 />
<title></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->