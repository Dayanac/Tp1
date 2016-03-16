<?php
	class FinanciasController extends AppController{
		
		public $helpers = array('html','form');
		
		public function index(){
		 $u = $this->Session->read('Usuario');
		 $financias =  $this->Financia->findAllByUsuarioId($u['0']['Usuario']['id']);
	     $this->set('financias', $financias);
				
		}
		
		public function historico(){
		 $u = $this->Session->read('Usuario');
		 $financias =  $this->Financia->findAllByUsuarioId($u['0']['Usuario']['id']);
		 $this->set('financias', $financias);
		
		 
		}
		public function fechar($id = null){
		 $contas = $this->Financia->Conta->findAllByFinanciaId($id);
		 $total = 0;
		 foreach($contas as $c): 
			$total = $contas['Conta']['valor'] + $total;
			debugger::dump($total);
		 endforeach;
		 
		 $financia =  $this->Financia->findById($id);
		 $financia['Financia']['gastos'] = $total;
		 if ($this->Financia->save($financias)){
				$this->Flash->set('Mês fechado com sucesso!!');
				$this->redirect(array('controller'=> 'usuarios', 'action' => 'index'));
			}
		}
		public function adicionar($id= null){
			
			$u = $this->Session->read('Usuario');
			
			
			if (empty($this->request->data)){
			$financias = $this->Financia->find('list',array('fields' => array('id','nome')));
			$this->set('financias', $financias);
			
		}
		else{
			$financias['Financia']['usuario_id'] = $u['0']['Usuario']['id'];
			$financias['Financia']['nome'] = $this->data['Financia']['nome'];
			
			
			if ($this->Financia->save($financias)){
				$this->Flash->set('Mês adicionado com sucesso!!');
				$this->redirect(array('controller'=> 'usuarios', 'action' => 'index'));
			}
		}
		}
	}
?>

		 
		 