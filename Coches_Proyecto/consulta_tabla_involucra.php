<?php
    //parametors para la conexion a la base de datos
	$host = "localhost";
	$basededatos = "proyecto_coches";
	$usuariodb = "baseDatosProyecto";
    $clavedb = "170869efrain1998";
    
    try {
        $conexion = new PDO('mysql:host='.$host.';dbname='.$basededatos, $usuariodb, $clavedb);
    } 
    catch (PDOException $e) 
    {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>

<html lang="es">
	<head> 
		<title>CONSULTA TABLA RESERVA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>TABLA RESERVA</h3>
			</div>
		</header>

		<section>
			<table class="col-md-12">
				<tr class="bg-primary">
					<th class="pad-basic">ID_RESERVA</th>
					<th class="pad-basic">ID_MATRICULA</th>
                    <th class="pad-basic">PRECIO_ALQUILER</th>
				<tr>

				<?php

				$query="SELECT * FROM involucra";
				$consulta=$conexion->query($query);
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
						echo'
						<tr>
						<td>'.$fila['id_reserva'].'</td>
                        <td>'.$fila['id_matricula'].'</td>
                        <td>'.$fila['PrecioAlquiler'].'</td>
						</tr>
						';
                    }

				?>

			</table>
		</section>
		<center>
		<br><br>
		<input type="button" value="REGRESAR" class="btn btn-link" onclick="location.href='registro_involucra.php' "name="atras"/>
	    </center>
</body>
</html>