<?php  
require_once('consumirPartidos.php');
?>
<html>
<head>
	<title>Partidos</title>
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
	</div>

		<div id="page-content-wrapper">
	            <div class="container-fluid">
	            	<div class="row">
	            		<div class="col-md-12">
	            			<center><h1>Partidos Jugados</h1></center>
	            		</div>
	            	</div>
	                <div class="row">
	                    <div class="col-md-4 col-md-offset-3">
	                        	<table id="tabla_equipo" class="table"> 
	                        		<thead>
	                          			<tr>
	                            			
	                            			<th>Numero</th>
	                            			<th>Descripcion</th>
	                            			<th>Estadio</th>
	                            			<th>Fecha</th>
	                            			<th>Hora</th>
	                            			<th>Equipo 1</th>
	                            			<th>Equipo 2</th>
	                            			<th>Resultado</th>	
	                         		    </tr>
	                        		</thead>
	                        		<tbody>
	                          <?php
	                          foreach ($resultado as $AllGamesResult) {
	                          	foreach ($AllGamesResult as $tGameInfo) {
	                          		foreach ($tGameInfo as $partido) {
	                          			echo '<tr>';
	                          			 echo'<td>'.$partido['iId'].'</td>';
	                          			 echo'<td>'.$partido['sDescription'].'</td>';
	                          			 echo'<td>'.$partido['StadiumInfo']['sStadiumName'].'</td>';
	                          			 echo'<td>'.$partido['dPlayDate'].'</td>';
	                          			 echo'<td>'.$partido['tPlayTime'].'</td>';
	                          			 echo'<td><span><img src="'.$partido['Team1']['sCountryFlag'].'"></img></span>'.$partido['Team1']['sName'].'</td>';
	                          			 echo'<td><span><img src="'.$partido['Team2']['sCountryFlag'].'"></img></span>'.$partido['Team2']['sName'].'</td>';
	                          			 echo'<td>'.$partido['sScore'].'</td>';
	                          			echo'</tr>';
	                          			
	                          		
	                          		
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







     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>