<?php
header("Content-Type: text/html;charset=utf-8");
?>

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
							<a class="nav-link mr-4 mt-2" href="hombre.html"><b>HOMBRE</b></a>
						</li>
						<li class="nav-item">
							<a class="nav-link mr-5 mt-2" href="php/create.php">REGISTRARSE</a>
						</li>
						<li class="nav-item">
		  					<a class="nav-link ml-5 mt-2 disabled" href="#">BUSCAR</a>
		  				</li>
		  				<li class="nav-item">
		  					<a class="nav-link ml-2 mt-2 disabled" href="#">INICIAR SESIÓN</a>
		  				</li>
		  				<li class="nav-item">
		  					<a class="nav-link ml-2 mt-2 disabled" href="#">CESTA</a>
		  				</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="container-fluid bg-danger">
		<div class="pt-3 pb-2">
			<p class="text-center text-white"><b>REBAJAS HASTA 40%</b></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="pt-3 pb-2 text-center">
			<p><b>CAMISETAS</b></p>
			<small>Nuevas prendas cada semana y rebajas de hasta un 40%.</small>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-3 lista">
			<li class="mt-4"><b>PRENDAS</b></li>
			<li class="mt-4 mb-4"><a href="camisetash.php" class="text-dark"><b>Camisetas</b></a></li>
			<div class="menu mb-4">
				<li><input type="checkbox" name="list" id="nivel1-1"><label for="nivel1-1" class="text-dark">Camisas | Polos</label>
					<div class="interior">
						<a href="camisasypolosh.php" class="text-dark"><b>Ver todo</b></a><br>
						<a href="camisash.php" class="text-dark">Camisas</a><br>
						<a href="polosh.php" class="text-dark">Polos</a>
					</div>
				</li>
			</div>
			<li class="mb-4"><a href="abrigosh.php" class="text-dark">Abrigos</a></li>
			<li class="mb-4"><a href="pantalonesh.php" class="text-dark">Pantalones</a></li>
			<li class="mb-4"><a href="calzadoh.php" class="text-dark">Calzado</a></li>
		</div>
		<div class="col-lg-9">
			<div class="row mt-3">
				<?php 

				$db=new mysqli('localhost','userc','admin1234','proyecto');//nos conectamos a la base
				mysqli_set_charset($db,"utf8");

				if($db->connect_errno>0){//comprobamos que nos hemos conectado correctamente
					die('Imposible conectar ['.$db->connect_error.']');
				}
				
				//guardamos la consulta en una variable y la comprobamos
				$sql = "select DISTINCT Referencia,Foto,Precio,Nombre,Rebaja from ropahombre where Tipo='Camiseta';";
				if(!$resultado=$db->query($sql)){
					die('Erro de conexión');
				}

				$i=0;
				$j=0;
				while ($i<$resultado->num_rows){
					//asignamos valores obtenidos
					$fila = $resultado->fetch_object();
					$Referencia=$fila->Referencia;
					$Foto=$fila->Foto;
					$Precio=$fila->Precio;
					$Nombre=$fila->Nombre;
					$Rebaja=$fila->Rebaja;
					echo"<div class='col-lg-3'>";
					echo"<form action='ropa.php' method='post'>";
	 					echo"<input type='hidden' name='referencia' value='".$Referencia."' />";
	 					echo"<input title='boton enviar' alt='boton enviar' src='img".$Foto.$Referencia.".jpg' type='image' class='img-fluid' />";
					echo"</form>";
					// echo"<div class='col-lg-3'>";
					//echo"<a href='pantalon1.html'><img src='img/".$Referencia."/".$Referencia."jpg' class='img-fluid'></a>";
					// echo"<a href='pantalon1.html'><img src='img".$Foto.$Referencia.".jpg' class='img-fluid'></a>";

					echo"<small>".$Nombre."</small><br>";
					if ($Rebaja==0) {
						echo"<small>".$Precio."€</small>";
						echo"</div>";
					}
					else{
						echo"<small><strike> ".$Precio."€</strike>  </small>";
						$PrecioRe=$Precio-($Precio*($Rebaja/100));
						echo"<small class='text-danger'>".$PrecioRe."€</small>";
						echo"</div>";
					}
					

					if ($j==3) {
						echo"</div>";
						echo"<div class='row mt-3'>";
						$j=-1;
					}


					$j++;
					$i++;
				}
				/*---------------------------
				<div class="col-lg-3">
					<a href="#" title=""><img src="img/mujer/camisetas/camiseta2b.jpg" class="img-fluid"></a>
					<small>Camiseta 1</small><br>
					<small><strike>29,95€</strike></small>
					<small class="text-danger">10,95€</small>
				</div>
				<div class="col-lg-3">
					<a href="#" title=""><img src="img/mujer/camisetas/camiseta3.jpg" class="img-fluid"></a>
					<small>Camiseta 2</small><br>
					<small><strike>19,95€</strike></small>
					<small class="text-danger">15,95€</small>
				</div>
				<div class="col-lg-3">
					<a href="#" title=""><img src="img/mujer/camisetas/camiseta4.jpg" class="img-fluid"></a>
					<small>Camiseta 3</small><br>
					<small><strike>25,95€</strike></small>
					<small class="text-danger">20,95€</small>
				</div>
				<div class="col-lg-3">
					<a href="#" title=""><img src="img/mujer/camisetas/camiseta5.jpg" class="img-fluid"></a>
					<small>Camiseta 4</small><br>
					<small><strike>17,95€</strike></small>
					<small class="text-danger">15,95€</small>
				</div>				
			</div>
			<div class="row mt-3">
				<div class="col-lg-3">
					<a href="#" title=""><img src="img/mujer/camisetas/camiseta6.jpg" class="img-fluid"></a>
					<small>Camiseta 5</small><br>
					<small>29,95€</small>
					<!-- <small class="text-danger">26,95€</small> -->
				</div>
			</div>
			-----------------------*/
			?>
		</div>

	</div>
	<div class="container-fluid">
	<footer class="row p-3 colorgris">
		<div class="col-lg-3"><a href="https://www.instagram.com/?hl=es" class="text-dark" target=_blank>INSTAGRAM</a></div>
		<div class="col-lg-3"><a href="https://twitter.com/?lang=es" class="text-dark" target=_blank>TWITTER</a></div>
		<div class="col-lg-3"><a href="https://es-es.facebook.com/" class="text-dark" target=_blank>FACEBOOK</a></div>
		<div class="col-lg-3"><a href="https://www.pinterest.es/" class="text-dark" target=_blank>PINTEREST</a></div>
	</footer>
</div>
	</div>
</body>
</html>