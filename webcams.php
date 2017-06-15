<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/partediario.php?default_tab=0');


$webcams = $html->find('#webcams',0);


 echo $webcams->outertext;

 


 
 
 
?>


