<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<h2>Meses</h2>
 <table>
	<tr>
		<th>Nome</th>
		<th>Gastos</th>
		<th>Ação</th>
	</tr>
	
	<?php foreach($financias as $f): ?>
		
	<tr>
		<td> <?php echo $f['Financia']['nome']; ?> </td>
		<td> <?php echo $f['Financia']['gastos']; ?> </td>
		<td> <?php echo $this->Html->link("Fechar Mes",
		array('controller' => 'contas', 'action' => 'fechar', $f['Financia']['id'])); ?></td>
		
	</tr>
		
	<?php endforeach; ?>
 </table>
 
<?php

echo $this->Html->link("Voltar", array('controller' => 'usuarios', 'action' => 'index'));

?>