
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../../db.php');
echo"<div id = 'huvudmeny'>
  <nav>
    <ul>
	  <li><a href='before.php'>Inför ansökan</a></li>
      <li><a href='personalData.php'>Personuppgifter</a></li>
	  <li><a href='map.php'>Karta</a></li>
	  <li><a href='heatPump.php'>Värmepump</a></li>
	  <li><a href='drillFirm.php'>Borrfirma</a></li>
	  <li><a href='installFirm.php'>Installatör</a></li>
	  <li><a href='overview.php'>Översikt</a></li>
	  <li><a href='after.php'>Efter ansökan</a></li>
	  
    </ul>
  </nav>
</div> ";
?>

