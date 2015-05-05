function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


function closed() {
	alert("Denna sida är för tillfälligt ej synlig på grund av att den ej fungerar som den skall. Vad denna sida skall visa är det som ni ser om ni testar skriva ut formuläret genom knappen skriv ut")
	
}