<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/tarifas.php');


$tarifas = $html->find('.col-xs-12',0);


 echo $tarifas->outertext;

 


 
 
 
?>


