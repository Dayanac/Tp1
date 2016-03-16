<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>

<h2>Inserir Mês</h2>
<?php

	echo $this->Form->create('Financia');
	echo $this->Form->input('nome');
	
	
	echo $this->form->end('Salvar');

	
	
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<?php echo $this->Html->link("Voltar",(array('controller' => 'usuarios','action' => 'index'))); ?>
<br/>
<br/>
<br/>
<br/>