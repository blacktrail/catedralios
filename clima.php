<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/partediario.php');

$banner = $html->find('#myCarousel2', 0);
$meteo = $html->find('#meteorologia', 0);



 






$marquee=$html->find('p',0);




?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="latin1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Cerro Catedral, Bariloche. #CatedralInvierno." />
    <meta name="keywords" content="Cerro Catedral, Bariloche, ski, snowboard, nieve, grastronomia, servicios, travesia, montaña, medios de elevaciion, tarifas, parque de nieve, trineos, donas" />
    <meta name="author" content="Catedral Alta Patagonia">

    <title>Catedral Alta Patagonia</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/estilos2016.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    
    

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="JavaScript" 


type="text/JavaScript">


window.resizeTo(screen.availWidth, 
screen.availHeight); 


window.moveTo(0,0);


</script>
</head>

<body>

    <!-- Navigation -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
              <img src="img/imgs/header_01.png" width="8%" height="auto"> 
              <img src="img/imgs/header_02.png" width="18%" height="auto"> 
              <img src="img/imgs/header_03.png" width="32%" height="auto">
	    	  <img src="img/imgs/header_04.png" width="13%" height="auto">
			  <img src="img/imgs/header_05.png" width="15%" height="auto">
	    	  <img src="img/imgs/header_06.png" width="8%" height="auto">
                
            </div>
           
        </div>
        <!-- /.container -->
    </nav>
    
    
    
    
    
    
    
    
   

<!-- Page Content -->
   <div >
    <table height="71px">
       
       </table>
    </div>
			<div class="contenedor" >
            <span style="color:#FFF; font-size:12px;"><marquee onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="120" align="baseline"><?php	echo $marquee->plaintext;?></marquee></span>
            
<div >
<?php

echo $banner->outertext;

?>
</div>
<div>
<?php

echo $meteo->outertext;
?>
</div>
            
            
            
            
            
            
            
            
            
         
  
		  </div>
		
</div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<footer class="footerfixed">
      <div class="container">
        <table width="100%" border="0" cellspacing="0">
  <tr>
    <td><img src="img/btn_sociales_01.png" width="36" height="34"></td>
     <td><img src="img/btn_sociales_02.png" width="36" height="34"></td>
      <td><img src="img/btn_sociales_03.png" width="36" height="34"></td>
       <td><img src="img/btn_sociales_04.png" width="36" height="34"></td>
        <td><img src="img/btn_sociales_05.png" width="36" height="34"></td><br>
 <td><img src="img/btn_sociales_06.gif" width="36" height="34"></td>
   
  </tr>
</table>

      </div>
    </footer>
</body>

</html>
