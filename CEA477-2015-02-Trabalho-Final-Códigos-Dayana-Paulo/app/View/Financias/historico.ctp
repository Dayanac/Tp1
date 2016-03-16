<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<h2>Histórico de Meses</h2>
 <table>
	<tr>
		<th>Nome</th>
		<th>Gastos</th>
		
	</tr>
	
	<?php foreach($financias as $f): ?>
		
	<tr>
		<td> <?php echo $this->Html->link($f['Financia']['nome'], 
		array('controller' => 'contas', 'action' => 'index', $f['Financia']['id'])); ?> </td>
		<td> <?php echo $f['Financia']['gastos']; ?> </td>
		
		
	</tr>
		
	<?php endforeach; ?>
 </table>
 
<?php

echo $this->Html->link("Voltar", array('controller' => 'usuarios', 'action' => 'index'));

?>