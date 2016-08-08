<?php  
require_once('consumirGoleadores.php');
?>

<html>
<head>
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
				                    <a href="#">
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
		            			<center><h1>Top 10 Goleadores</h1></center>
		            		</div>
		            	</div>
		                <div class="row">
		                    <div class="col-md-6 col-md-offset-2">
		                        <table id="tabla_goleadores" class="table">
		                        	<thead>
		                        	  	<tr>
		                        	    			
		                        	    	<th>Jugador</th>
		                        	    	<th>Goles</th>
		                        	    	<th>Pais</th>
		                        	    </tr>
		                        	</thead>
		                        	<tbody>
		                        		<?php
		                        		foreach ($resultado as $equipo) {
		                        			foreach ($equipo as $infoE) {
		                        				foreach ($infoE as $info) {
		                 
		                        		  echo '<tr>';
		                        		  echo '<td class="id" data-campo="id"><span>'. $info['sName'] .'</span></td>';
		                        		  echo '<td class="id" data-campo="id"><span>'. $info['iGoals'] .'</span></td>';
		                        		  echo '<td class="id" data-campo="id"><img src="'. $info['sFlag'] .'"></img></td>';
		                        		  echo '</tr>';
		                        		  }
		                        		 }
		                        		}
		                        		?>
		                        	</tbody>

		                        </table>
		                    </div>
		                </div>
		            </div>
		        </div>
	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>