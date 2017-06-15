<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/partediario.php?default_tab=1');

$banner = $html->find('#myCarousel2', 0);
 
 echo $banner->outertext;
  

 


 
 
 
?>


