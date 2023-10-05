
<?php
	session_start();
	//comprova si existeix usuari a la sessió
	IF( isset($_POST["nombre"]) ){
	//Si existeix te'l carrega a la variable superglobal.
		$_SESSION["n"] = $_POST['nombre'];
	}
	if (isset($_GET["logout"]))
	{
		session_destroy();
		header("Refresh:1; url=index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
	
</head>
<body>
     <!Comprova si el nom ja està introduit>
	<?php if( isset($_SESSION["n"]) ){ ?>
	<header class="container p-3">
		<nav class="clearfix">
			<a href="index.php? logout">
				<button class="float-end btn btn-secondary">Cerrar Sesion </button>
			</a>
		</nav>
	</header>



		<!Si el nom està escrit al requadre, mostrarà Benvingut+nom>
		<h1>Bienvenido <?= $_SESSION["n"] ?></h1>
	
		<!si no, el recollirà amb un miss. introdueix el teu nom>
	<?php }else{ ?>
		<form class="container text-center" method="post" action=".">
			Iniciar sesion: 
			<input class="form-control" type="text" name="nombre" placeholder="usuario" >
			<input class="m-2 btn btn-primary" type="submit" value="iniciar" >
		</form>
	<?php } ?>



</body>
</html>