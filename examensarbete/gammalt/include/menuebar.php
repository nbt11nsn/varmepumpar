
<?php
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../db.php');
echo"<div id = 'huvudmeny'>
  <nav>
    <ul>
	  <li><a href='before.php' id ='extendmenuebarsmall'>Inför ansökan</a></li>
	  <li><a href='buildingInfo.php' id = 'checked1'>Fastighet</a></li>
      <li><a href='personalData.php' id = 'checked2'>Ansökande</a></li>
	  <li><a href='map.php' id = 'checked1'>Karta</a></li>
	  <li><a href='heatPump.php' id = 'checked4'>Värmepump</a></li>
	  <li><a href='drillFirm.php' id ='extendmenuebarbig'>Borrfirma/Installatör</a></li>
	  <li><a href='overview.php' id = 'checked7'>Översikt</a></li>
	  <li><a href='after.php' id ='extendmenuebarsmall'>Efter ansökan</a></li>
	  <li><a href='test.php' id ='extendmenuebarsmall'>test</a></li>
    </ul>
  </nav>
</div> ";
?>

