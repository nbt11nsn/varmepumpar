<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
                <div id="wrapper">
<head>
<?php
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
defined('THE_TOPHEADER') || define('THE_TOPHEADER', TRUE);
include_once("include/topheader.php");

?>
 </head>
		<body>
 
 
<div id="middlediv">
<div id="sidebarleft">
<?php
defined('THE_SIDEBAR') || define('THE_SIDEBAR', TRUE);
include_once("include/sidebar.php");
?>
 </div> <!-- end #sidebar -->

<div id="sidebarright">  
<div id ="top">
<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
include_once("include/header.php");
defined('THE_MENUE8') || define('THE_MENUE8', TRUE);
require_once("include/menuebar8.php");
?>
</div><!-- End #top --> 
<div id ="bot">
<?php
defined('THE_AFTER') || define('THE_AFTER', TRUE);
require_once("after.php");
?>
 </div> <!-- End #bot --> 
 </div> <!-- End #sidebarright --> 
  </div> <!-- End #middlediv --> 

<div id="footer"> 
<?php
defined('THE_FOOTER') || define('THE_FOOTER', TRUE);
include_once("include/footer.php");
?>
 </div> <!-- end #footer -->
 
                </div> <!-- End #wrapper --> 
        </body>
 </html>



