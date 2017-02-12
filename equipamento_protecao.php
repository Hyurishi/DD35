<table>
	<tr>
		<td>Armadura</td>
		<td>Tipo</td>
		<td>Bonus na CA</td>
		<td>DES MAX.</td>
	</tr>	
	<tr>
		<td>
			<select name="armadura">
				<option value=""></option>
				<option value="acolchoada">Alcochoada</option>
			</select>
		</td>
		<td class="armadura_tipo"></td>
		<td class="armadura_bonus"></td>
		<td class="armadura_destreza"></td>
	</tr>
</table>
<table>
	<tr>
		<td>Penalidade de Armadura</td>
		<td>Falha de Magia</td>
		<td>Deslocamento</td>
		<td>Peso</td>
		<td>Propriedades Especiais</td>
	</tr>	
	<tr>
		<td class="armadura_penalidade"></td>
		<td class="armadura_falha"></td>
		<td class="armadura_deslocamento"></td>
		<td class="armadura_Peso"></td>
		<td><input type="text" name="armadura_propriedades"></td>
	</tr>
</table>
<table>
	<tr>
		<td>Escudo</td>
		<td>Bonus na CA</td>
		<td>Peso</td>
		<td>Penalidade de Armadura</td>
	</tr>	
	<tr>
		<td>
			<select name="escudo">
				<option value=""></option>
				<option value="pequeno_madeira">Pequeno de Madeira</option>
			</select>
		</td>
		<td class="escudo_bonus"></td>
		<td class="escudo_peso"></td>
		<td class="escudo_penalidade"></td>
	</tr>
</table>
<table>
	<tr>

		<td>Falha de Magia</td>
		<td>Propriedades Especiais</td>
	</tr>	
	<tr>
		<td class="escudo_falha"></td>
		<td><input type="text" name="escudo_propriedades"></td>
	</tr>
</table>

<h2>Item de Protecao <button type="button" class="btn-protecao-plus">+</button></h2>
<ul>
	<li>
		<input type="hidden" name="item_protecao[0][protecao]" value="anel_protecao">
		<table>
			<tr>
				<td>Item de Protecao <button type="button" class="btn-protecao-minus">-</button></td>
				<td>Bonus na CA</td>
				<td>Tipo</td>
				<td>Propriedades Especiais</td>
			</tr>	
			<tr>
				<td class="protecao_item"></td>
				<td class="protecao_bonus"></td>
				<td class="protecao_tipo"></td>
				<td><input type="text" name="protecao_propriedades[0][observacoes]"></td>
			</tr>
		</table>
	</li>
</ul>
