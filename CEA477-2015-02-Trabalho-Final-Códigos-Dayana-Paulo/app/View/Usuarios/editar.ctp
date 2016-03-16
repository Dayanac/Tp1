<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<br/>
<h2>Configurações</h2>


<?php
	
	
	echo $this->Form->create('Usuario');
	echo $this->Form->input('id');
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->input('login');
	echo "Senha";
	echo $this->Form->password('senha');
	
	echo $this->form->end('Salvar');
?>
<br/>	
<br/>
<br/>	
	<?php echo $this->Html->link("Voltar",(array('controller' => 'usuarios','action' => 'index'))); ?>
<br/>
<br/>