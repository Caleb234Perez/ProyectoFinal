<?php
	include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Estadisticas de la pagina</title>
	<!--<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">-->
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="librerias/plotly-latest.min.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<center>
						<strong><h1> Gráficas De Ventas e Inventario </h1></strong>
					</center>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal').load('lineal.php');
		
		$('#cargaBarras').load('barras.php');
	});
</script>

<?php
	include("footer.php");
?>