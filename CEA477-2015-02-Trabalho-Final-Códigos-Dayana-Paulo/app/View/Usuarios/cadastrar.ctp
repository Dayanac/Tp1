<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<br/>

<h2>Cadastro de Usuario</h2>
<?php

	echo $this->Form->create('Usuario');
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->input('login');
	echo "Senha";
	echo $this->Form->password('senha');
	
	echo $this->form->end('Salvar');
	
?>