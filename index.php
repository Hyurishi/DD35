<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>D&D 3.5</title>
</head>
<body>

<form action="" method="post">

	<!-- Cabeçalho -->
	<div>
		<?php include_once "cabecalho.php" ?>
	</div>


	<!-- Niveis e Classes -->
	<div>
		<?php include_once "niveis_classes.php" ?>
	</div>

	<!-- Habilidades -->
	<div>
		<?php include_once "Habilidades.php" ?>
	</div>

	<!-- Base de Combate -->
	<div>
		<?php include_once "base_combate.php" ?>
	</div>

	<!-- Iniciativa -->
	<div>
		<?php include_once "iniciativa.php" ?>
	</div>

	<div>
		<!-- Resistencia -->
		<?php include_once "resistencia.php" ?>

		<!-- Base de Ataque -->
		<?php include_once "base_ataque.php" ?>

	</div>

	<button type="submit">Salvar</button>
</form>



</body>
</html>