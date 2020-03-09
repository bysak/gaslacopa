<?php
//Conexcion con BD
include("conexion.php");
//Validacion presionar boton
if (isset($_POST['register'])){
	//Validacion de cuadros de texto con datos
	if (strlen($_POST['pedido']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['referencia']) >= 1){
		//Almacenamiento de datos
		$pedido = trim($_POST['pedido']);
		$name = trim($_POST['name']);
		$telefono = trim($_POST['telefono']);
		$email = trim($_POST['email']);
		$direccion = trim($_POST['direccion']);
		$referencia = trim($_POST['referencia']);
		$fecha_reg = date("d/m/y");
		//Consulta SQL
		$consulta = "INSERT INTO pedidogas(fecha, pedido, nombre, telefono, email, direccion, referencia) VALUES ('$fecha_reg','$pedido','$name','$telefono','$email','$direccion','$referencia')";
		//Ingreso de datos en BD
		$resultado = mysqli_query($conex,$consulta);
		//Validacion de ingreso
		if ($resultado) {
			?>
			<h3 class="ok">Su pedido fue enviado correctamente</h3>			            
			<?php
			header( "refresh:5; url=index.php" );
		}else{
			?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}
	}else{
			?>
			<h3 class="bad">Por favor ingrese todos los datos</h3>
			<?php
	}
}
?>