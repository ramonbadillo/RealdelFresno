<!DOCTYPE html>
<html lang="en"><head>
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
  			  	<li><a href="croquis.php">Croquis</a></li>
  			    <li class="active"><a href="lista.php">Lista</a></li>
				
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
		
		
		  <?php 
		  $rows = 44; // define number of rows
		  $cols = 10;// define number of columns
	  
		  echo "<table class='table table-condensed table-striped'>"; 
		  ?>
		  <tr>
		      <th>PAX</th>
		      <th>ASIENTO</th>
			  <th>NOMBRE</th>
			  <th>PUNTO</th>
			  <th>ORIGEN</th>
			  <th>DESTINO</th>
			  <th>PRECIO(US)</th>
			  <th>PRECIO(MX)</th>
			  <th>OBSERVACIONES</th>
			  <th>TELEFONO</th>
		   </tr>
	   
		  <?php 
		  $nAsi = 1;
		  for($tr=1;$tr<=$rows;$tr++){ 
		  	echo "<tr>"; 
		    for($td=1;$td<=$cols;$td++){
				echo "<td>";

				
				if ($td==1)
					echo $tr;
				else if ($td==3)
					echo "JORGE LUIS MEZA MARQUEZ";
				else
				echo "Algo de Texto";
			
				echo "</td>";
			
			} 
		      echo "</tr>"; 
		  } 
		  echo "</table>"; 

		  ?>
		
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

	<script src="assets/js/bootstrap-formhelpers-selectbox.js"></script>
    <script src="assets/js/bootstrap-formhelpers-datepicker.en_US.js"></script>
    <script src="assets/js/bootstrap-formhelpers-datepicker.js"></script>

	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="assets/js/asientos.js"></script>
	
</body></html>