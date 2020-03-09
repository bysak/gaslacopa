<!DOCTYPE html>
<html>
	<head>
		<title>Registrar usuario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Anton&display=swap');
        </style>
  	</head>
	<body>
        <aside>
            <form method="post">
                <h1>Haga su pedido</h1>
                <input type="text" name="pedido" placeholder="Ingrese su pedido: kilos y cantidad">
                <input type="text" name="name" placeholder="Ingrese su Nombre">
                <input type="text" name="telefono" placeholder="Ingrese su teléfono Ej. 9 1234 5678">
                <input type="email" name="email" placeholder="Ingrese su E-mail">
                <input type="text" name="direccion" placeholder="Ingrese su dirección Ej. Malloquito 2736, peñaflor">
                <input type="text" name="referencia" placeholder="Ingrese calle, villa o condominio de referencia">
                <input type="submit" name="register">
            </form>
    	</aside>
        <main>
            <p>GAS LA COPA</p>
            <div class="container">
                <div class="slider">
                    <<ul>
                        <li><img src="images/whastapp.png" alt=""></li>
                        <li><img src="images/horario.png" alt=""></li>
                        <li><img src="images/Alcancia.png" alt=""></li>
                        <!--<li><img src="images/4.jpg" alt=""></li>-->
                    </ul>
                </div>
            </div>
        </main>
        <?php
            include("registrar.php");
        ?>
	</body>
</html>