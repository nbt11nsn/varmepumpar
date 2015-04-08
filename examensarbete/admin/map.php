
<!DOCTYPE html>
<html>
<head>

<?php
defined('THE_HEAD') || define('THE_HEAD', TRUE);
include_once("include/head.php");
?>
</head>
<body>
<?php
defined('THE_HEADER') || define('THE_HEADER', TRUE);
require_once("include/header.php");
?>
<div id="main-wrapper">
<?php
defined('THE_MENUE') || define('THE_MENUE', TRUE);
require_once("include/menuebar.php");
defined('THE_DB') || define('THE_DB', TRUE);
require_once(__DIR__ .'./../../db.php');
?>
 <div id="infoframe">
  <h1 id = "smallTitle">Bifoga karta</h1>
<fieldset>		
		<legend><b>Karta</b></legend>
		
		<label for="chkbox">Jag skickar kartan via post </label>
		<input type='checkbox' class='checkbox_' id = "chkbox";
		
	<div class="upload_pdf" >
		<form id="upload_form" enctype="multipart/form-data" method="post" action="">
	<ul>
		<li class="center"><label for="pdf_fil">Ladda upp en Faktura</label>
		<input type="file" name="pdf_fil" id="pdf_fil"/></li>
			<li class="center"><input type="reset" name="rst" id="rst" value="återställ" />
		<input type="submit" id="upfak" name="upfak" accept="application/pdf" value="Ladda upp Faktura" /></li></ul>
    </fieldset></form>
</div></fieldset>	
 </form>
 </div>
</div><!--main-wrapper-->

</body>
</html>



