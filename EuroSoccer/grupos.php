<?php  
require_once('consumirGrupos.php');
?>

<html>
<head>
	<title>Grupos de la Eurocopa</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/e9662cf433.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/app.js"></script>
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
		                    			<center><h1>Grupos</h1></center>
		                    		</div>
		                    	</div>
		                        <div class="row">
		                            <div class="col-lg-12">
		                              <div class="row">  	
		                                		
		                                		
		                                  <?php
		                                  $contador=0;
		                                  foreach ($resultado as $tGroupsCompetitors) {
		                                  	foreach ($tGroupsCompetitors as $GroupInfo) {
                                               foreach($GroupInfo as $item){
                                               	 echo '<div class="col-sm-6 col-md-4">';
                                               	 echo '<table id="tabla_equipo" class="table">';
		                                  			echo'<tbody>';
		                                  			$contador++;
		                                  			foreach ($item as $itemBuscado) {
		                                  				echo'<h2>'.$itemBuscado['sDescription'].'</h2>';
		                                  				foreach ($itemBuscado as $key) {
		                                  					
		                                  				foreach ($key as $equipos) {
		                                  					echo '<tr>';
		                                  					echo '<td>'.$equipos['sName'].'</td>';
		                                  					echo '<td><img src="'. $equipos['sCountryFlag'] .'"></img></td>';
		                                  					echo '</tr>';
		                                  					}	
		                                  				
		                                  				}

		                                  			}
		                                  			echo '</tbody>';
		                                  			echo'</table>';
		                                  			echo'</div>';
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

	</div>












	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>