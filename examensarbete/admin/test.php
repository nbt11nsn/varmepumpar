<html>
<title> Background Colors</title>
<body>
<h1> <b> www.infolet.org </b> </h1>
<form name = "myform">
<input type = "button" value="Click to change color" onclick="changecolor()">
</form>
</body>

<script type="text/javascript">
function changecolor()
{
var clr = prompt("Enter the color","");
document.bgColor = clr;
}
 </script>
</html>