<h2>Armas <button type="button" class="btn-arma-plus">+</button></h2>
<ul>
	<li>
		<input type="hidden" name="arma_ataque[0][arma]" value="punho">
		<table>
			<tr>
				<td>ARMA <button type="button" class="btn-arma-minus">-</button></td>
				<td>Base de Ataque</td>
				<td>Dano</td>
				<td>Sucesso Decisivo</td>
			</tr>	
			<tr>
				<td class="arma">Punho</td>
				<td>
					<input type="text" name="armas[0][base_ataque]" value="0" />
				</td>
				<td>
					<input type="text" name="armas[0][dano]" value="1D3 + MOD FOR" />
				</td>
				<td>
					<input type="text" name="armas[0][sucesso_decisivo]" value="X2" />
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td>Alcance</td>
				<td>Tipo</td>
				<td>Observações</td>
			</tr>	
			<tr>
				<td class="arma_alcance">1,5m</td>
				<td class="arma_tipo">Concussão</td>
				<td><input type="text" name="arma_ataque[0][observacoes]"></td>
			</tr>
		</table>
	</li>
</ul>
