<?php
	class ContasController extends AppController{
		
		public $helpers = array('html','form');
		
		public function index($id = null){
		 $this->set('contas', $this->Conta->findAllByFinanciaId($id));
		
		}
		public function fechar($id = null){
		
		 $contas = $this->Conta->findAllByFinanciaId($id);
		 $financias =  $this->Conta->Financia->findById($id);
		 $total = 0;
		 foreach($contas as $c): 
			$valor = $c['Conta']['valor'];
			$total = floatval($valor) + $total;
		 endforeach;
		 
		 $financias['Financia']['gastos'] = $total;
		 
		 if ($this->Conta->Financia->save($financias)){
				$this->Flash->set('Mês fechado com sucesso!!');
				$this->redirect(array('controller'=> 'financias', 'action' => 'index'));
			}
		}
	
		public function add() {
		 
		if (empty($this->request->data)){
			$meses = $this->Conta->Financia->find('list',array('fields' => array('id','nome')));
			
			$this->set('meses', $meses);
			}
		else{
			
			if ($this->Conta->save($this->request->data)){
				$this->Flash->set('Conta cadastrada com sucesso!!');
				$this->redirect(array('controller' => 'usuarios','action' => 'index'));
			}
		}		
		
		}
	 
		 
	 public function delete($id = null){
		
		$this->Conta->delete($id); 
		$this->Flash->set('Conta excluido com sucesso!!');
		$this->redirect(array('action' => 'index'));
				
	}
	}
?>
		
