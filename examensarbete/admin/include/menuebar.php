
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../../db.php');
echo"<div id = 'huvudmeny'>
  <nav>
    <ul>
	  <li><a href='before.php'>Inför ansökan</a></li>
	  <li><a href='buildingInfo.php' id = 'checked1'>Fastighet</a></li>
      <li><a href='personalData.php' id = 'checked2'>Ansökande</a></li>
	  <li><a href='map.php' id = 'checked1'>Karta</a></li>
	  <li><a href='heatPump.php' id = 'checked4'>Värmepump</a></li>
	  <li><a href='drillFirm.php' id = 'checked5'>Borrfirma</a></li>
	  <li><a href='installFirm.php' id = 'checked6'>Installatör</a></li>
	  <li><a href='overview.php' id = 'checked7'>Översikt</a></li>
	  <li><a href='after.php' id = 'checked8'>Efter ansökan</a></li>
    </ul>
  </nav>
</div> ";
?>

