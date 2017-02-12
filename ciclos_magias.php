<h2>Ciclos de Magia</h2>
<table>
	<tr>
		<td>Magias Conhecidas</td>
		<td>CD</td>
		<td>Ciclo</td>
		<td>Magias por Dia</td>
		<td>Magias Adicionais</td>
	</tr>
	<?php for ($i=0; $i <= 9; $i++): ?>
		<tr>
			<td><input type="text" name="ciclos_magias[<?php echo $i ?>][conhecidas]"></td>
			<td><input type="text" name="ciclos_magias[<?php echo $i ?>][cd]"></td>
			<td><?php echo $i ?></td>
			<td><input type="text" name="ciclos_magias[<?php echo $i ?>][dia]"></td>
			<?php if($i>0): ?>
				<td><input type="text" name="ciclos_magias[<?php echo $i ?>][adicionais]"></td>
			<?php  else: ?>
				<td>0</td>
			<?php endif ?>
		</tr>
	<?php endfor ?>
</table>