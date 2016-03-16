<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<h2>Inserir Contas</h2>
<?php
	echo $this->Form->create('Conta');
	echo $this->Form->input('nome');
	echo $this->Form->input('valor');
	echo $this->Form->input('vencimento');
	
	echo $this->Form->select('financia_id', $meses, array('empty' => 'Selecione:'));
?>
<br/>
<br/>
<?php
	echo $this->Form->end('Salvar');
	
	

	echo $this->Html->link("Voltar",(array('controller' => 'usuarios','action' => 'index')));

	
?>