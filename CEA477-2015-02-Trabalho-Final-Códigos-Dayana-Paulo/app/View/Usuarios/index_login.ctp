<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>
<br/>
<h2>Acesso ao Sistema</h2>
<br/>
<?php
	echo $this->Form->create('Usuario', array('controller'=> 'usuarios', 'action' => 'login'));
	
	echo $this->Form->input('login');
	
	echo "Senha";
	echo $this->Form->password('senha');
	
	echo $this->Form->end('Acessar');
?>
<br/>
<br/>
<br/>
<br/>
