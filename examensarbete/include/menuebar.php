<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<?php
defined('THE_MENUE') or die();

echo"<div id ='menuBar'>

  <nav>
    <ul class='menue'>	
	  <li class ='check'><a href='startPage.php' id ='extendmenuebarsmall'>Inför ansökan</a></li>
	  <li><a href='buildinginfoPage.php' id ='extendmenuebarsmall'>Fastighet</a></li>
      <li><a href='personaldataPage.php' id ='extendmenuebarsmall'>Ansökande</a></li>
	  <li><a href='mapPage.php' id ='extendmenuebarmini'>Karta</a></li>
	  <li><a href='heatpumpPage.php' id ='extendmenuebarsmall'>Värmepump</a></li>
	  <li><a href='drillfirmPage.php' id ='extendmenuebarbig'>Borrfirma/Installatör</a></li>
	  <li><a href='overviewPage.php' id ='extendmenuebarsmall'>Översikt</a></li>
	  <li><a href='afterPage.php' id ='extendmenuebarsmall'>Efter ansökan</a></li>
    </ul>
  </nav>
</div> ";
?>
