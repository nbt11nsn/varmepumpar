<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../../db.php');
echo"<div id = 'huvudmeny'>
  <nav>
    <ul>
      <li><a href='' class='hemikon'>H</a></li> 
	  <li><a href='before.php'>Inför ansökan</a></li>
      <li><a href='application.php'>Ansökan</a></li>
	  <li><a href='after.php'>Efter ansökan</a></li>
      <li><a href='' class='logikon'>L</a></li>
    </ul>
  </nav>
</div> ";
?>