<div id ="topo">
	<?php echo $this->Html->image("ufoptopo.png", array('alt' => 'Imagem nao encontrada')); ?> </td>
</div>
<br/>
<br/>

<?php $c = $this->Session->read('Usuario'); ?>

<h3> <?php echo 'Bem vindo, ';
     echo $c['0']['Usuario']['nome']; ?> </h3>
	 
	 <br/>



<span class="notice">
	
	<?php 
		echo $this->Html->link("Adicionar Conta", array('controller' =>'contas', 'action'=>'add'));
	?> </td>
</span>
<br/>
<br/>
<span class="notice">
	
	<?php 
		echo $this->Html->link("Adicionar Mês", array('controller' =>'financias', 'action'=>'adicionar'));
	?> </td>
</span>
<br/>
<br/>
<span class="notice">
	
	<?php 
		echo $this->Html->link("Fechar Mês", array('controller' =>'financias', 'action'=>'index'));
	?> </td>
</span>
<br/>
<br/>
<span class="notice">
	
	<?php 
		echo $this->Html->link("Histórico", array('controller' =>'financias', 'action'=>'historico'));
	?> </td>
</span>
<br/>
<br/>
<span class="notice">
	
	<?php 
		echo $this->Html->link("Configurações", array('controller' =>'usuarios', 'action'=>'editar', $c['0']['Usuario']['id']));
	?> </td>
</span>
<br/>
<br/>
<span class="notice">
	
	<?php 
		echo $this->Html->link("Sair do Sistema",array('controller' =>'usuarios', 'action'=>'logout') );
	?> </td>
</span>
<br/>
<br/>
