<?php

require_once $_DIR . 'lib/otherlibrary/initialize.php';
require_once $_DIR . 'models/Punto.php';

?>

<!DOCTYPE html>
<html lang="es"><head>
    <meta charset="utf-8">
    <title>Punto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/bootstrap-formhelpers.css" rel="stylesheet">
    <link href="assets/css/bootstrap-formhelpers-countries.flags.css" rel="stylesheet">
    <link href="assets/css/bootstrap-formhelpers-currencies.flags.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
	
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link href="assets/css/mio.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
    

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
  	  <div class="navbar navbar-fixed-top">
  	    <div class="navbar-inner">
  	      <div class="container">
  	        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  	          <span class="icon-bar"></span>
  	          <span class="icon-bar"></span>
  	          <span class="icon-bar"></span>
  	        </a>
  	        <a class="brand" href="#">Punto Real del Fresno</a>
  	        <div class="nav-collapse">
  	          <ul class="nav">
  			  	<li class="active"><a href="croquis.php">Croquis</a></li>
  			    <li><a href="lista.php">Lista</a></li>
				
  	          </ul>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
		
		

  <!-- Subhead
  ================================================== -->
	  <div class="container">
	  	
  		<div class="row">
  			<div class="span4">
		
		  <div class="bfh-datepicker">
		    <div class="input-prepend bfh-datepicker-toggle" data-toggle="bfh-datepicker">
		      <span class="add-on"><i class="icon-calendar"></i></span>
		      <input type="text" class="input-medium" readonly>
		    </div>
		    <div class="bfh-datepicker-calendar">
		      <table class="calendar table table-bordered">
		        <thead>
		          <tr class="months-header">
		            <th class="month" colspan="4">
		              <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
		              <span></span>
		              <a class="next" href="#"><i class="icon-chevron-right"></i></a>
		            </th>
		            <th class="year" colspan="3">
		              <a class="previous" href="#"><i class="icon-chevron-left"></i></a>
		              <span></span>
		              <a class="next" href="#"><i class="icon-chevron-right"></i></a>
		            </th>
		          </tr>
		          <tr class="days-header">
		          </tr>
		        </thead>
		        <tbody>
		        </tbody>
		      </table>
		    </div>
		  </div>
		  </div>
		  <div class="span4">
			  <a href="#" type="button" class="btn btn-info">Cambiar Fecha</a>
		  </div>
		</div>
		
		<div class="row">
			<div class="span4">
  			  <?php 
  			  $rows = 11; // define number of rows
  			  $cols = 5;// define number of columns
			  
  			  echo "<table class='table'>"; 
  			  ?>
			  
			   
  			  <?php 
  			  $nAsi = 1;
			  $numero=" ";
  			  for($tr=1;$tr<=$rows;$tr++){ 
  			      echo "<tr>"; 
  			          for($td=1;$td<=$cols;$td++){
						  if ($td!=3) {
						  	
						  
						  if ($nAsi<10) {
						  	$numero = "0".$nAsi;
						  }else
						  $numero = "".$nAsi;
  						  	echo "<td>";
  			                 
  							 echo "<a id='".$nAsi."' class='asiento' href='#'><strong>$numero</strong><img class='imgAsi' src='http://i.imgur.com/ryymACv.jpg'></a>";
							 
  							 echo "";
							 
  							 echo "</td>";
  							 $nAsi++;
  							 if ($nAsi>44) {
  								 break;
  							 }
						}else {
							echo "<td>";
							if ($tr==1) {
								
								echo "<div><strong>PASILLO</strong></div>";
								
							}
							echo "</td>";	
						}
  			          } 
  			      echo "</tr>"; 
  			  } 
  			  echo "</table>"; 
			  
			      
			      
			    
  			  //$e= Estado::find(2);
  			  //echo $e->descripcion;
  			  ?>
				
				
			</div>
			<div class="span6">
				
				<form id="contact-form" name="contact" method="post" action="">
				  <fieldset>
				    <legend id="nAsiento">Selecciona el Asiento</legend>
					
				      <div class="input-prepend control-group">
				        <span class="add-on"><i class="icon-user"></i></span>
				        <input class="span4" id="inputIcon nombre" type="text" name="nombre" placeholder="Nombre">
				      </div>
					
  				      
					  
					  <div class="bfh-selectbox">
					    <input type="hidden" name="punto" value="">
					    <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
					      <span class="bfh-selectbox-option input-medium" data-option="0">Punto</span>
					      <b class="caret"></b>
					    </a>
						
					    <div class="bfh-selectbox-options">
					      <input type="text" class="bfh-selectbox-filter">
					      <div role="listbox">
					      <ul role="option">
							<?php
						  	$p= Punto::find('all');
						  	
							
							foreach ($p as $punto) {
								
							    echo "<li><a tabindex='-1' href='#' data-option=".$punto->id.">".$punto->descripcion."</a></li>";
							}
							
							?>
					        
					        
					      </ul>
					    </div>
					    </div>
					  </div>
  				      <div class="input-prepend control-group">
  				        <span class="add-on"><i class="icon-home"></i></span>
  				        <input class="span4" id="inputIcon origen" type="text" name="origen" placeholder="Origen">
  				      </div>
  				      <div class="input-prepend control-group">
  				        <span class="add-on"><i class="icon-flag"></i></span>
  				        <input class="span4" id="inputIcon destino" type="text" name="destino" placeholder="Destino">
						
  				      </div>
					  <br>
					  <div class="input-prepend input-append">
					    <span class="add-on">US$</span>
					    <input class="span1 precio" id="appendedPrependedInput" type="text" style="text-align: right">
					    <span class="add-on">.00</span>
					  </div>
					  <br>
					  <div class="input-prepend input-append">
					    <span class="add-on">MX$</span>
					    <input class="span1 precio" id="appendedPrependedInput" type="text" style="text-align: right">
					    <span class="add-on">.00</span>
					  </div>
					  <br>
  				      <div class="input-prepend">
  				        <span class="add-on"><i class="icon-eye-open"></i></span>
  				        <input class="span4" id="inputIcon" type="text" placeholder="Observaciones">
  				      </div>
					  
  				      <div class="input-prepend">
  				        <span class="add-on"><i class="icon-book"></i>Telefono</span>
  				        <input type="text" class="input-medium bfh-phone" data-country="US">
  				      </div>
					  
				  
				  
  				      <br>
	      				   <a class="btn" href="#"><i class="icon-pencil"></i> Editar</a>
	      				  <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Eliminar</a>
	      				  <button type="submit" class="btn btn-primary">Vender Boleto</button>
						  
				  </fieldset>
				</form>
				
			</div>
			
			
		</div>
		
		
        <hr>

        <footer>
          <p><a href="http://r-link.co/">R-link.co</a></p>
        </footer>
      </div>
		
	  </div>




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>


	<script src="assets/js/jquery.validate.js"></script>


	<script src="assets/js/bootstrap-formhelpers-selectbox.js"></script>
    <script src="assets/js/bootstrap-formhelpers-datepicker.en_US.js"></script>
    <script src="assets/js/bootstrap-formhelpers-datepicker.js"></script>
	<script src="assets/js/bootstrap-formhelpers-phone.js"></script>
	<script src="assets/js/bootstrap-formhelpers-phone.format.js"></script>

	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="assets/js/asientos.js"></script>
	
</body></html>