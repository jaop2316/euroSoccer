<?php  
require_once('consumir.php');
?>
<html>
<head>
	<title>Equipos</title>
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
            			<center><h1>Equipos Participantes</h1></center>
            		</div>
            	</div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        	<table id="tabla_equipo" class="table"> 
                        		<thead>
                          			<tr>
                            			
                            			<th>Nombre</th>
                            			<th>Bandera</th>
                            			<th>Informacion</th>
                         		    </tr>
                        		</thead>
                        		<tbody>
                          <?php
                          $contador = 0;
                          foreach ($resultado as $equipo) {
                          	foreach ($equipo as $infoE) {
                          		foreach ($infoE as $info) {
                            echo '<tr>';
                            echo '<td class="id" data-campo="id"><span>'. $info['sName'] .'</span></td>';
                            echo '<td class="id" data-campo="id"><img src="'. $info['sCountryFlagLarge'] .'"></img></td>';
                            echo '<td class="id" data-campo="id"><a href="'. $info['sWikipediaURL'] .'"><span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="bottom" title="Click aqui para ver informacion del equipo"></span></a></td>';
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