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
		<?php include_once "habilidades.php" ?>
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

	<div>
		<!-- Arma -->
		<?php include_once "arma_ataque.php" ?>

		<!-- Equipamento Protecao -->
		<?php include_once "equipamento_protecao.php" ?>

		<!-- Outros Equipamentos -->
		<?php include_once "outros_itens.php" ?>
	</div>

		<!-- Pericias -->
	<div>
		<?php include_once "pericias.php" ?>		
	</div>

	<!-- Talentos -->
	<div>
		<?php include_once "talentos.php" ?>
	</div>

	<!-- Caracteristicas Raciais -->
	<div>
		<?php include_once "raciais_classes.php" ?>
	</div>

	<!-- Idiomas -->
	<div>
		<?php include_once "idiomas.php" ?>
	</div>


	<div>
		<!-- Magias -->
		<?php include_once "magias.php" ?>

		<!-- Ciclo de Magias -->
		<?php include_once "ciclos_magias.php" ?>

	</div>

	<!-- Descricao -->
	<div>
		<?php include_once "descricao.php" ?>
	</div>

	<button type="submit">Salvar</button>
</form>



</body>
</html>