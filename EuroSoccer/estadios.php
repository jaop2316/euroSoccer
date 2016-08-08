<?php  
require_once('consumirEstadios.php');
?>
<html>
<head>
	<title>Estadios</title>
	<title>Top 10 de Goleadores</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/e9662cf433.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

	<div id="wrapper">
				<div id="sidebar-wrapper">
		            <ul class="sidebar-nav">
		                <li class="sidebar-brand">
		                    <a href="index.html">
		                        EuroSoccer
		                    </a>
		                </li>
		                <li>
		                    <a href="index.html">Inicio</a>
		                </li>
		                <li>
		                    <a href="equipos.php">Equipos Participantes</a>
		                </li>
		                <li>
		                    <a href="grupos.php">Grupos</a>
		                </li>
		                <li>
		                    <a href="estadios.php">Estadios</a>
		                </li>
		                <li>
		                    <a href="goleadores.php">Top de Goleadores</a>
		                </li>
		                <li>
		                    <a href="partidos.php">Informacion de Partidos</a>
		                </li>
		            </ul>
		        </div>
		        <div id="page-content-wrapper">
		            <div class="container-fluid">
		            	<div class="row">
		            		<div class="col-md-12">
		            			<center><h1>Estadios</h1></center>
		            		</div>
		            	</div>
		                <div class="row">
		                    <div class="col-lg-12">
		                        <div class="row">
		                        	<?php
		                        	$contador=1;
		                        	foreach ($resultado as $equipo) {
		                        		foreach ($equipo as $infoE) {
		                        			foreach ($infoE as $info) {
		                        	
		                        	  echo '<div class="col-sm-6 col-md-4">';
		                        	  echo '<div class="thumbnail">';
		                        	  echo '<img src="'. $imagenesEstadios[$contador] .'" class="img-responsive">';
		                        	  echo '<div class="caption">';
		                        	  echo '<h4>'. $info['sStadiumName'] .'</h4>';
		                        	  echo'<p> Capacidad :'. $info['iSeatsCapacity'] .'</p>';
		                        	  echo'<p> Ciudad :'. $info['sCityName'] .'</p>';
		                        	  echo '<p>Mas Informacion<a href="'. $info['sWikipediaURL'] .'"> <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="bottom" title="Click aqui para ver informacion del estadio"></span></a></td>';
		                        	  echo '</div>';
		                        	  echo '</div>';
		                        	  echo '</div>';
		                        	  $contador++;
		                        	  }
		                        	 }
		                        	}
		                        	?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
	</div>	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>