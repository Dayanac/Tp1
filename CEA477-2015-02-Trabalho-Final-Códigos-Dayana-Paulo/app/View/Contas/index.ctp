<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
 <h3>Lista de Contas</h3>

 <table>
	<tr>
		<th>Nome</th>
		<th>Valor</th>
		<th>Vencimento</th>
	</tr>
	
	<?php foreach($contas as $c): ?>
	  
	
	<tr>
		<td> <?php echo $c['Conta']['nome']; ?> </td>
		<td> <?php echo $c['Conta']['valor']; ?> </td>
		<td> <?php echo $c['Conta']['vencimento']; ?> </td>
	</tr>
		
	<?php endforeach; ?>
 </table>
 
 <?php
		echo $this->Html->link("Voltar", array('controller' =>'financias', 'action'=>'historico'));
?>