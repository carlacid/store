<!-- CREATE.PHP: SE ENCARGA DE AGRAGAR NUEVOS USUARIOS A LA BASE DE DATOS. -->
	<meta charset="utf-8">
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php
	$statement = FALSE;
	function escape($html) {
		return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
	}
	if (isset($_POST['submit'])) {
		try {
			// AÑADIMOS LOS DATOS DE LA BASE DE DATOS
			$hostname = "localhost";
			$database = "proyecto";
			$username = "userc";
			$password = "admin1234";
			// REALIZAMOS LA CONEXIÓN CON LA BASE DE DATOS
			$connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
			// RECOGEMOS LOS DATOS DE NUEVO USUARIO
			$new_user = array(
				"firstname" => $_POST['firstname'],
				"lastname" => $_POST['lastname'],
				"email" => $_POST['email'],
				"password" => $_POST['password'],
				"cp" => $_POST['cp'],
				"phone" => $_POST['phone']
			);
			$email_a = $new_user["email"];
			// $age_a = $new_user["password"];
			// COMPROBAMOS QUE LA DIRECCIÓN DE CORREO SEA VÁLIDA
			if (filter_var($email_a, FILTER_VALIDATE_EMAIL)== FALSE) {
?>
			<blockquote>
				<?php
					// MENSAJE CONFORME NO ES VÁLIDA
					echo "La dirección de correo ($email_a) es inválida.";
				?>
			</blockquote>
			<?php
			}
			else {
				$sql = sprintf(
					// INSERTA LOS VALORES EN LA TABLA
					"INSERT INTO %s (%s) values (%s)","usuarios",implode(", ", array_keys($new_user)),":" . implode(", :",array_keys($new_user))
				);
				$statement = $connection->prepare($sql);
				$statement->execute($new_user);
			}
		}
		// SI NO SE CONECTA A LA BASE DE DATOS
		catch(PDOException $error) {
			// MUESTRA UN MENSAJE DE ERROR
			echo $sql . "<br>" . $error->getMessage();
		}
	}
?>
<?php 
	// AL CICLAR EL BOTON DE REGISTRARSE SI TODO ESTÁ CORRECTO, MUESTRA UN MENSAJE
	if (isset($_POST['submit']) && $statement) : 
?>
		<blockquote><?php echo escape($_POST['firstname']); ?> SE HA AGREGADO A LA BASE DE DATOS.</blockquote>
<?php 
	endif; 
?>
	<div class="container-fluid">
	<div class="row">
					<nav class="navbar bg-white navbar-expand-lg navbar-expand-md col-lg-12 col-md-12 col-12">
						<button class="navbar-toggler btn btn-default navbar navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
		  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  					<ul class="navbar-nav">
		  						<li class="nav-item">
		  							<a class="nav-link ml-5 mr-4 mt-2 text-danger" href="../index.html"><img src="../img/logo.png" class="logo img-fluid col-lg-4"></a>
		  						</li>
		  						<li class="nav-item">
		  							<a class="nav-link mr-4 mt-2 text-danger" href="../rebajas.html">REBAJAS</a>
		  						</li>
		  						<li class="nav-item">
		  							<a class="nav-link mr-4 mt-2" href="../nuevo.html">NUEVO</a>
		  						</li>
		  						<li class="nav-item">
		  							<a class="nav-link mr-4 mt-2" href="../mujer.html">MUJER</a>
		  						</li>
		  						<li class="nav-item">
		  							<a class="nav-link mr-4 mt-2" href="../hombre.html">HOMBRE</a>
		  						</li>
		  						<li class="nav-item active">
		  							<a class="nav-link mr-5 mt-2" href="create.php"><b>REGISTRARSE</b></a>
		  						</li>
		  						<li class="nav-item">
		  							<input class="nav-link ml-5 mt-2">
		  						</li>
		  					</ul>
		  				</div>
		  			</nav>
				</div>
			</div>
	<div class="container contenador">
		<form method="post">
			<div class="form-group">
				<p>Crea tu cuenta y serás de los primeros en enterarte de nuestras promociones y nuevos lookbooks.</p>
				<div class="form-row">
					<div class="form-group col-lg-12">
<!-- 						<label for="formGroupExampleInput">Nombre</label>
 -->						<input type="text" name="firstname" class="form-control" id="formGroupExampleInput" placeholder="Nombre*">
					</div>
					<div class="form-group col-lg-12">
						<input type="text" name="lastname" class="form-control" id="formGroupExampleInput" placeholder="Apellido*">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email*">
						<!-- <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email*"> -->
						<small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie.</small>
					</div>
					<div class="form-group col-md-4">
						<input type="password" name="password" class="form-control" id="formGroupExampleInput" placeholder="Contraseña*">
					</div>
					<div class="form-group col-md-4">
						<input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Móvil*">
					</div>
				</div>
				<!-- <div class="form-row">
					<div class="form-group col-lg-6">
						<select class="custom-select" required>
							<option>España (Península y Baleares)</option>
							<option>Afganistán</option>
							<option>Albania</option>
							<option>Alemania</option>
							<option>Andorra</option>
							<option>Anguila</option>
							<option>Antigua y Barbuda</option>
							<option>Arabia Saudí</option>
							<option>Argelia</option>
							<option>Argentina</option>
							<option>Armenia</option>
							<option>Aruba</option>
							<option>Australia</option>
							<option>Austria</option>
							 <option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
							<option></option>
						</select>
					</div> -->
					<div class="form-group col-lg-6">
						<input type="text" name="cp" class="form-control" id="formGroupExampleInput" placeholder="Código postal*">
					</div>
				</div>

				<!-- <div class="form-row">
					<div class="form-group col-lg-12">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">Mujer</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">Hombre</label>
						</div>
					</div>
				</div> -->
<input type="submit" name="submit" value="Registrarse" class="button">		</form>
	</div>