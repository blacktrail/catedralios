<?php
// Pull in PHP Simple HTML DOM Parser
include("simple_html_dom.php");
$html = new simple_html_dom();
 
// Load a file
$html->load_file('http://www.catedralaltapatagonia.com/partediario.php');

$banner = $html->find('#myCarousel2', 0);
$medios = $html->find('#medios', 0);



 






$marquee=$html->find('p',0);




?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <link href="css/logo-nav.css" rel="stylesheet">
</head>

<body>

<div class="container">
            <div class="row row-centered pos">
                <div class="col-lg-8 col-xs-12 col-centered">
                <div>
                  <img src="images/imgs/home_01.png" width="100%" height="auto" /> </div>
</div>
</div>
</div>




	<!-- Navigation -->
<meta charset="latin1">
        
    <!-- Page Content -->
    <div >
    <table height="71px">
       
       </table>
    </div>
    <div>    
  <span style="color:#FFF; font-size:12px;"><marquee onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="120" align="baseline"><?php	echo $marquee->plaintext;?></marquee></span>
            
                        <div >
								<?php                  
                                echo $banner->outertext;
                                ?>
                        </div>
                        <div>
								<?php
                                echo $medios->outertext;
                                ?>
                        </div>
    
    	</div>     <!-- fin contenido -->
    
    
    
    <footer class="footerfixed">

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


    </footer>

    
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <script src="js/bootstrap-datepicker.js"></script>
        <!-- Bootstrap Core JavaScript -->
    
    <script>
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
	
    $(function(){
        $('#dp1').datepicker({
                format: 'dd-mm-yyyy'
        });
    
        $('#dp2').datepicker({
                format: 'dd-mm-yyyy'
        });
    
    // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    
        var checkin = $('#dpd1').datepicker({
            format: 'dd-mm-yyyy',
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            format: 'dd-mm-yyyy',
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
    </script>
    
    <script src="js/bootstrap-magnify.min.js"></script>
   

















</body>
</html>
