<?php
	class MesesController extends AppController{
		
		public $helpers = array('html','form');
		
		public function index(){
		 $this->set('meses', $this->Mese->find('all'));
		
		}
		
		public function historico(){
		 $c = $this->Session->read('Usuario');
		 $meses =  $this->Mese->findAllByUsuarioId($c['0']['Usuario']['id']);
		 $this->set('meses', $meses);
		
		 
		}
		
		public function adicionar($id= null){
			
			$u = $this->Session->read('Usuario');
			
			if (empty($this->request->data)){
			$meses = $this->Mese->find('list',array('fields' => array('id','nome')));
			$this->set('meses', $meses);
			
		}
		else{
			$meses['Mese']['usuario_id'] = $u['0']['Usuario']['id'];
			$meses['Mese']['nome'] = $this->data['Mese']['nome'];
			
			
			if ($this->Mese->save($meses)){
				$this->Flash->set('Mês adicionado com sucesso!!');
				$this->redirect(array('controller'=> 'usuarios', 'action' => 'index'));
			}
		}
		}
	}
?>

		 
		 