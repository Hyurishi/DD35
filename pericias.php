<h2>Pericias</h2>
<table>
	<tr>
		<td>Nome da Perícia</td>
		<td>Habilidade Base</td>
		<td>Total</td>
		<td>&nbsp;</td>
		<td>Mod Habilidade</td>
		<td>&nbsp;</td>
		<td>Graduação</td>
		<td>&nbsp;</td>
		<td>Outros</td>
	</tr>

	<tr>
		<input type="hidden" name="pericias[0][pericia]" value="abrir_fechadura">
		
		<td>Abrir Fechadura</td>
		<td>Des</td>
		<td>10</td>
		<td>=</td>
		<td>0</td>
		<td>+</td>
		<td>
			<span class="pericia_graducao">10</span>
			<button type="button" class="btn-pericia-plus">+</button>
			<button type="button" class="btn-pericia-minus">-</button>
		</td>
		<td>+</td>
		<td>
			<input type="text" name="pericias[0][outros]" value="0">	
		</td>
	</tr>	
</table>
<p>
	<sup>1</sup> Perícia pode ser usada sem graduação; <sup>2</sup> Sofre penalidade de armadura, se houver (O dobro para natação)
</p>