<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página principal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar bg-white navbar-expand-lg navbar-expand-md col-lg-12 col-md-12 col-12">
				<button class="navbar-toggler btn btn-default navbar navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link mr-5" href="index.html"><img src="img/logo.png" class="logo img-fluid col-lg-4"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ml-5 mr-4 mt-2 text-danger" href="rebajas.html">REBAJAS</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link mr-4 mt-2" href="nuevo.html">NUEVO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-4 mt-2" href="mujer.html">MUJER</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-4 mt-2" href="hombre.html">HOMBRE</a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-5 mt-2" href="php/create.php">REGISTRARSE</a>
						</li>
						<li class="nav-item">
							<input class="nav-link ml-5 mt-2">
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class='container-fluid'>
			<div class='row'>
				<div class='col-lg-8'>
	<?php 
		header("Content-Type: text/html;charset=utf-8");

		$v1 = $_POST['referencia'];

		$db=new mysqli('localhost','userc','admin1234','proyecto');//nos conectamos a la base
		mysqli_set_charset($db,"utf8");

		if($db->connect_errno>0){//comprobamos que nos hemos conectado correctamente
			die('Imposible conectar ['.$db->connect_error.']');
		}
				
		//guardamos la consulta en una variable y la comprobamos
		$sql = "select * from ropamujer where Referencia='".$v1."';";
		if(!$resultado=$db->query($sql)){
			die('Erro de conexión');
		}

		$i=0;
		while ($i<$resultado->num_rows){
			//asignamos valores obtenidos
			$fila = $resultado->fetch_object();
			$ID=$fila->ID;
			$Nombre=$fila->Nombre;
			$Foto=$fila->Foto;
			$Color=$fila->Color;
			$Talla=$fila->Talla;
			$Precio=$fila->Precio;
			$Tipo=$fila->Tipo;
			$Referencia=$fila->Referencia;						
			$Rebaja=$fila->Rebaja;
			
			$i++;
		}
		echo "<img src='img".$Foto.$Referencia.".jpg' class='img-fluid'></a>";
				echo "</div>";
				echo "<div class='col-lg-4 mt-5 pt-5'>";
					echo "<div class='row col-lg-12 distribucion'>";
						echo "<span>".$Nombre."</span>";
						$PrecioRe=$Precio-($Precio*($Rebaja/100));
						echo "<span><strike>".$Precio."€</strike><span class='text-danger'>".$PrecioRe."€</span></span>";
					echo "</div>";
					echo "<div class='row col-lg-12 distribucion gris'>";
						echo "<span>REF. &nbsp &nbsp".$Referencia."</span>";
					echo "<span>(-".$Rebaja."%)</span>";
					echo "</div>";
					echo "<div class='row col-lg-12 mt-5 mb-5'>";
						// echo "<a href='#' title=''><div class='color'></div></a>";
						echo "<span class='text-right'>".$Color."</span>";
					echo "</div>";
					echo "<div class='form-group row col-lg-12'>";
						echo "<select class='custom-select' required>";
							echo "<option value='' selected>Elige una talla</option>";
							echo "<option>".$Talla."</option>";
							// echo "<option>".$Talla."</option>";
							// echo "<option>M</option>";
							// echo "<option>L</option>";
						echo "</select>";
					echo "</div>";				
					
				
	?>
	<div class='row mt-4'>
						<div class='col-lg-12'>
							<button type='submit' class='btn btn-dark text-white col-lg-12'>AÑADIR A LA CESTA</button>
							<!-- <button class='bg-dark col-lg-2 ml-2 mr	-0'><img src='img/megusta.png' class='img-fluid'></butto> -->
						</div>
					</div>
</div>
			</div>
		</div>
</body>
</html>