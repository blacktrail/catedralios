<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/partediario.php?default_tab=0');


$tempcum = $html->find('h1',2);


 echo $tempcum->outertext;

 


 
 
 
?>


